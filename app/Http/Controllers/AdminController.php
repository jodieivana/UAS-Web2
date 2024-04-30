<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use App\Models\Feedback;
use App\Models\Book;
use App\Models\Review;
use App\Models\Notification;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function view_userlist()
    {
        $users = User::paginate(10);

        return view('admin.userlist', [
            'users' => $users
        ]);
    }

    public function ban_userlist(User $user)
    {
        if ($user->account_status == 'active') {
            $user->account_status = 'banned';
        } else {
            $user->account_status = 'active';
        }

        // $user->account_status = 'banned';
        $user->save();

        return redirect('/view_userlist');
    }

    public function view_reports()
    {
        $reports = Report::paginate(10);

        return view('admin.reports', [
            'reports' => $reports
        ]);
    }


    public function delete_reports(Report $report)
    {
        $report->delete();
        Notification::create([
            'subject' => 'Report Deleted',
            'content' => 'Your report on ' . $report->review->book->name . " not accepted",
            'sent_date' => Carbon::now(),
            'user_id' => $report->reporter_user->id
        ]);

        return redirect()->back()->with('success', 'Report Deleted');
    
    }

    public function approved_reports(Report $report)
    {
        $report->report_status = 'aprroved';
        $report->save();
            
        Notification::create([
            'subject' => 'Report Resolved',
            'content' => 'Your report on ' . $report->reported_user->name . " accepted",
            'sent_date' => Carbon::now(),
            'user_id' => $report->reporter_user->id,
        ]);

        return redirect()->back()->with('success', 'Status Successfully Changed');
        
    }

    public function declined_reports(Report $report)
    {
        $report->report_status = 'declined';
        $report->save();
            
        Notification::create([
            'subject' => 'Report Rejected',
            'content' => 'Your report on ' . $report->reported_user->name . " not accepted",
            'sent_date' => Carbon::now(),
            'user_id' => $report->reporter_user->id,
        ]);

        return redirect()->back()->with('success', 'Status Successfully Changed');
    }

    public function view_feedbacks()
    {
        $feedbacks = Feedback::paginate(10);

        return view('admin.feedbacks', [
            'feedbacks' => $feedbacks
        ]);
    }


    public function approved_feedbacks(Feedback $feedback)
    {
        $feedback->status = 'aprroved';
        $feedback->date_resolved = Carbon::now();

        $feedback->save();
            
        Notification::create([
            'subject' => 'Feedback Resolved',
            'content' => 'Thankyou for your feedback!',
            'sent_date' => Carbon::now(),
            'user_id' => $feedback->user_id,
        ]);
        return redirect()->back()->with('success', 'Status Successfully Changed');
        
    }

    public function declined_feedbacks(Feedback $feedback)
    {
        $feedback->status = 'declined';
        $feedback->date_resolved = Carbon::now();
        $feedback->save();
            
        Notification::create([
            'subject' => 'Feedback Resolved',
            'content' => 'Your feedback is rejected!',
            'sent_date' => Carbon::now(),
            'user_id' => $feedback->user_id,
        ]);

        return redirect()->back()->with('success', 'Status Successfully Changed');
    }

    public function view_booklist()
    {
        $books = Book::paginate(10);

        return view('admin.booklist', [
            'books' => $books
        ]);

    }

    public function delete_booklist(Book $book)
    {
        $book->delete();

        return redirect('/view_booklist')->with('success', 'Book Deleted');
    
    }

    public function view_addbooklist()
    {
        return view('admin.addbooklist');
    }

    public function save_addbooklist(Request $request)
    {
        // @dd($request);
        $validatedData = $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'summary' => 'required',
            'book_rating' => 'required',
            'language' => 'required',
            'cover_image' => 'required',
            'category_id' => 'required',
            'published_date' => 'required',
            'buy_on' => 'required'
        ]);

        $validatedData['tags'] = '-';
        Book::create($validatedData);

        return redirect('/view_booklist')->with('success', 'New book created.');
    }

    public function submit_editbooklist(Request $request, Book $book)
    {
        // @dd($request);
        $validatedData = $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'summary' => 'required',
            'book_rating' => 'required',
            'language' => 'required',
            'cover_image' => 'required',
            'category_id' => 'required',
            'published_date' => 'required',
            'buy_on' => 'required'
        ]);


        $book->update($validatedData);

        return redirect('/view_booklist')->with('success', 'Book updated.');
    }

    public function view_dashboard()
    {
        return view('admin.home');
    }

    public function view_review()
    {
        $reviews = Review::paginate(10);

        return view('admin.review', [
            'reviews' => $reviews
        ]);

    }

    public function delete_review(Review $review)
    {
        $review->delete();
        Notification::create([
            'subject' => 'Review Deleted',
            'content' => 'Your review on ' . $review->book->name . " was deleted because it was detected to violate human rights.",
            'sent_date' => Carbon::now(),
            'user_id' => $review->user->id
        ]);

        return redirect()->back()->with('success', 'Review Deleted');
    
    }

    public function view_bookdetail(Book $book)
    {
        return view('admin.bookdetail',[
            'book' => $book
            ]);
    }

    public function view_editbooklist(Book $book)
    {
        return view('admin.editbooklist',[
            'book' => $book
        ]);
    }

    public function view_reviewbooklist(Book $book)
    {
        return view('admin.reviewbooklist',[
            'reviews' => Review::where('book_id', $book->id)
        ]);
    }


    public function view_article()
    {
        return view('admin.article');
    }

    public function view_addarticle()
    {
        return view('admin.addarticle');
    }

    public function view_articledetail()
    {
        return view('admin.articledetail');
    }

    public function view_editarticle()
    {
        return view('admin.editarticle');
    }
    
    public function view_newsletter()
    {
        return view('admin.newsletter');
    }

    public function view_addnewsletter()
    {
        return view('admin.addnewsletter');
    }

    public function view_notification()
    {
        $notifications = Notification::paginate(10);

        return view('admin.notification', [
            'notifications' => $notifications
        ]);
        

    }

    public function view_addnotification()
    {
        return view('admin.addnotification', [
            'users' => User::all()->sortBy('email')
        ]);
    }

    public function save_addnotification(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'content' => 'required',
            'user_id' => 'required'
        ]);
        $validatedData['sent_date'] = Carbon::now();
        Notification::create($validatedData);
        return redirect('/view_notification')->with('success', 'Notification sent');
    }

    public function edit_notification(Notification $notification) {
        return view('admin.editnotification', [
            'users' => User::all()->sortBy('email'),
            'notification' => $notification
        ]);
    }

    public function  update_notification(Notification $notification, Request $request) {
        $validatedData = $request->validate([
            'subject' => 'required',
            'content' => 'required',
            'user_id' => 'required'
        ]);
        $validatedData['sent_date'] = Carbon::now();
        $notification->update($validatedData);
        return redirect('/view_notification')->with('success', 'Notification editted');
    }

    public function delete_notification(Notification $notification) {
        $notification->delete();
        return redirect('/view_notification')->with('success', 'Notification deleted');
    }

    public function view_draftnotification()
    {
        return view('admin.draftnotification');
    }

    public function view_allnotification()
    {
        return view('admin.allnotification');
    }
}
