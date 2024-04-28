<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('bookshelf.bookshelf');
})->middleware(['auth', 'verified'])->name('bookshelf');

Route::get('/category', function () {
    return view('category.category');
})->middleware(['auth', 'verified'])->name('category');

Route::get('/buku', function () {
    return view('buku.buku');
})->middleware(['auth', 'verified'])->name('buku');

Route::get('/notification', function () {
    return view('notification.notification');
})->middleware(['auth', 'verified'])->name('notification');

Route::get('/report', function () {
    return view('report.report');
})->middleware(['auth', 'verified'])->name('report');

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

Route::get('/view_feedbacks', [AdminController::class, 'view_feedbacks']);

Route::get('/view_booklist', [AdminController::class, 'view_booklist']);

Route::get('/view_addbooklist', [AdminController::class, 'view_addbooklist']);

Route::get('/view_review', [AdminController::class, 'view_review']);

Route::get('/view_bookdetail', [AdminController::class, 'view_bookdetail']);

Route::get('/view_article', [AdminController::class, 'view_article']);

Route::get('/view_addarticle', [AdminController::class, 'view_addarticle']);

Route::get('/view_articledetail', [AdminController::class, 'view_articledetail']);

Route::get('/view_newsletter', [AdminController::class, 'view_newsletter']);

Route::get('/view_addnewsletter', [AdminController::class, 'view_addnewsletter']);

Route::get('/view_notification', [AdminController::class, 'view_notification']);

Route::get('/view_addnotification', [AdminController::class, 'view_addnotification']);

Route::get('/view_allnotification', [AdminController::class, 'view_allnotification']);


require __DIR__.'/auth.php';
