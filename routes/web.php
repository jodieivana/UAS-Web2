<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Bookshelf;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Report;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/userpage', function () {
    return view('home.userpage');
})->middleware(['auth', 'verified'])->name('userpage');

Route::get('/bookshelf', function () {
    return view('bookshelf.bookshelf',[
        'search' => '',
        'bookshelves' => Bookshelf::where('user_id', Auth::user()->id)->orderByDesc('updated_at')->get()
    ]);
})->middleware(['auth', 'verified'])->name('bookshelf');

Route::post('/bookshelf', function(Request $request) {
    $validatedData = $request->validate([
        'search' => 'required'
    ]);
    return view('bookshelf.bookshelf',[
        'search' => $validatedData['search'],
        'bookshelves' => Bookshelf::where('user_id', Auth::user()->id)
        ->whereHas('book', function($query) use ($validatedData) {
            $query->where('title', 'like', '%' . $validatedData['search'] . '%')
                  ->orWhere('authors', 'like', '%' . $validatedData['search'] . '%');
        })
        ->orderByDesc('updated_at')
        ->get()
        //ini yg bookshelves aku chatgpt tp semoga ngerti
    
    ]);
})->middleware(['auth', 'verified']);

Route::get('/category', function () {
    return view('category.category',[
        'search' => '',
        'search_category' => '',
        'categories' => Category::all(),
        'books' => Book::take(10)
    ]);
})->middleware(['auth', 'verified'])->name('category');

Route::post('/category', function(Request $request) {
    $validatedData = $request->validate([
        'search' => 'required',
        'category_id' => 'required'
    ]);
    $searchTerm = $validatedData['search'];

    $books = Book::where('title', 'like',  '%' . $searchTerm . '%')
    ->where('authors', 'like',  '%' . $searchTerm . '%')
    ->where('category_id', $validatedData['category_id'])->get();
    return view('category.category',[
        'search' => $searchTerm,
        'search_category' => Category::find($validatedData['category_id'])->category_name,
        'categories' => Category::all(),
        'books' => $books
    ]);
})->middleware(['auth', 'verified']);

Route::get('/buku/{book}', function (Book $book) {

    return view('buku.buku',[
        'book' => $book,
        'reviews' => Review::where('book_id', $book->id)->orderBy('created_at')->get()
    ]);
})->middleware(['auth', 'verified'])->name('buku');

Route::get('add_bookshelf/{book}', function(Book $book) {
    $alreadyBookshelved = Bookshelf::where('user_id', Auth::user()->id)
    ->where('book_id', $book->id)->first();

    if($alreadyBookshelved) {
        $alreadyBookshelved->delete();
    } else {
        Bookshelf::create([
            'progress' => 'To Read',
            'book_id' => $book->id,
            'user_id' => Auth::user()->id
        ]);
    }
    return redirect('buku/'.$book->id);
})->middleware(['auth', 'verified']);

Route::get('delete_bookshelf/{bookshelf}', function(Bookshelf $bookshelf) {
    $bookshelf->delete();
    return redirect('/bookshelf');
})->middleware(['auth', 'verified']);

Route::post('change_bookshelf_progress/{bookshelf}', function(Request $request, Bookshelf $bookshelf) {
    $validatedData = $request->validate([
        'progress' => 'required'
    ]);
    $bookshelf->update($validatedData);
    return redirect('/bookshelf');
})->middleware(['auth', 'verified']);

Route::post('/submit_review/{book}', function(Book $book, Request $request) {
    $validatedRequest = $request->validate([
        'rating' => 'required',
        'review_text' => 'required'
    ]);

    Review::create([
        'rating' => $validatedRequest['rating'],
        'review_text' => $validatedRequest['review_text'],
        'review_date' => Carbon::now(),
        'review_status' => 'review',
        'user_id' => Auth::user()->id,
        'book_id' => $book->id
    ]);
    
    return redirect('buku/'.$book->id);
})->middleware(['auth', 'verified']);

Route::get('/notification', function () {
    return view('notification.notification',[
        'notifications' => Notification::where('user_id', Auth::user()->id)->limit(10)
    ->orderByDesc('created_at')->get()
    ]);
})->middleware(['auth', 'verified'])->name('notification');

Route::get('/report', function () {
    return view('report.report',[
        'review' => $review
    ]);
})->middleware(['auth', 'verified'])->name('report');

Route::post('/submit_report', function(Request $request) {
    $validatedData = $request->validate([
        'report_type' => 'required',
        'content' => 'required',
        'review_id' => 'required'
    ]);
    $review = Review::find($validatedData['review_id']);
    Report::create([
        'title' => 'Report from ' . Auth::user()->name,
        'content' => $validatedData['content'],
        'report_type' => $validatedData['report_type'],
        'report_status' => 'on progress',
        'reported_user_id' =>  $review->user->id,
        'reporter_user_id' => Auth::user()->id,
        'reported_review_id' => $review->id,
        'date_reported' => Carbon::now()
    ]);

    
    Notification::create([
        'subject' => 'Report Submitted',
        'content' => 'Thank you for your report on '. $review->user->name . '. We will investigate it ASAP.',
        'sent_date' => Carbon::now(),
        'user_id' => Auth::user()->id
    ]);

    return redirect('buku/' . $review->book->id);
})->middleware(['auth', 'verified']);

Route::get('/feedback', function () {
    return view('feedback.feedback');
})->middleware(['auth', 'verified'])->name('feedback');

Route::post('/submit_feedback', function(Request $request) {
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'type' => 'required'
    ]);
    Feedback::create([
        'title' => $validatedData['title'],
        'content' => $validatedData['content'],
        'type' => $validatedData['type'],
        'status' => 'On progress',
        'date_submitted' => Carbon::now(),
        'user_id' => Auth::user()->id
    ]);

    Notification::create([
        'subject' => 'Submitted Feedback',
        'content' => 'Thank you for the submitted feedback. We will read it ASAP.',
        'sent_date' => Carbon::now(),
        'user_id' => Auth::user()->id
    ]);
    return redirect('/');
})->middleware(['auth', 'verified']);

Route::get('/search', function () {
    return view('search.search');
})->middleware(['auth', 'verified'])->name('search');

Route::get('/',[HomeController::class,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_dashboard', [AdminController::class, 'view_dashboard']);

Route::get('/view_userlist', [AdminController::class, 'view_userlist']);

Route::get('/view_userlist/{user}/ban', [AdminController::class, 'ban_userlist']);

Route::get('/view_reports', [AdminController::class, 'view_reports']);
Route::get('/view_reports/{report}/delete', [AdminController::class, 'delete_reports']);
Route::get('/view_reports/{report}/approved', [AdminController::class, 'approved_reports']);
Route::get('/view_reports/{report}/declined', [AdminController::class, 'declined_reports']);

Route::get('/view_feedbacks', [AdminController::class, 'view_feedbacks']);
Route::get('/view_feedbacks/{feedback}/delete', [AdminController::class, 'delete_feedbacks']);
Route::get('/view_feedbacks/{feedback}/approved', [AdminController::class, 'approved_feedbacks']);
Route::get('/view_feedbacks/{feedback}/declined', [AdminController::class, 'declined_feedbacks']);


Route::get('/view_booklist', [AdminController::class, 'view_booklist']);
Route::get('/view_booklist/{book}/delete', [AdminController::class, 'delete_booklist']);

Route::get('/view_addbooklist', [AdminController::class, 'view_addbooklist']);
Route::post('/view_addbooklist', [AdminController::class, 'save_addbooklist']);

Route::get('/view_review', [AdminController::class, 'view_review']);
Route::get('/view_review/{review}/delete', [AdminController::class, 'delete_review']);

Route::get('/view_bookdetail', [AdminController::class, 'view_bookdetail']);

Route::get('/view_editbooklist', [AdminController::class, 'view_editbooklist']);
Route::put('/view_editbooklist/{book}', [AdminController::class, 'submit_editbooklist']);

Route::get('/view_reviewbooklist/{book}', [AdminController::class, 'view_reviewbooklist']);

Route::get('/view_article', [AdminController::class, 'view_article']);

Route::get('/view_addarticle', [AdminController::class, 'view_addarticle']);

Route::get('/view_articledetail', [AdminController::class, 'view_articledetail']);

Route::get('/view_editarticle', [AdminController::class, 'view_editarticle']);

Route::get('/view_newsletter', [AdminController::class, 'view_newsletter']);

Route::get('/view_addnewsletter', [AdminController::class, 'view_addnewsletter']);

Route::get('/view_notification', [AdminController::class, 'view_notification']);

Route::get('/view_addnotification', [AdminController::class, 'view_addnotification']);
Route::post('/view_addnotification', [AdminController::class, 'save_addnotification']);
Route::get('/delete_notif/{notification}', [AdminController::class, 'delete_notification']);
Route::get('/edit_notif/{notification}', [AdminController::class, 'edit_notification']);
Route::put('/edit_notif/{notification}', [AdminController::class, 'update_notification']);

Route::get('/view_draftnotification', [AdminController::class, 'view_draftnotification']);

Route::get('/view_allnotification', [AdminController::class, 'view_allnotification']);



require __DIR__.'/auth.php';
