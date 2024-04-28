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
        return view('admin.userlist', [
            'users' => User::orderByDesc('created_at')->get()
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
        return view('admin.reports', [
            'reports' => Report::all()
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
        return view('admin.feedbacks', [
            'feedbacks' => Feedback::all()
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
        return view('admin.booklist', [
            'books' => Book::all()
        ]);
    }

    public function delete_booklist(Book $book)
    {
        $book->delete();

        return redirect()->back()->with('success', 'Book Deleted');
    
    }

    public function view_addbooklist()
    {
        return view('admin.addbooklist');
    }

    public function view_dashboard()
    {
        return view('admin.home');
    }

    public function view_review()
    {
        return view('admin.review', [
            'reviews' => Review::all()
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

    public function view_bookdetail()
    {
        return view('admin.bookdetail');
    }

    public function view_editbooklist()
    {
        return view('admin.editbooklist');
    }

    public function view_reviewbooklist()
    {
        return view('admin.reviewbooklist');
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
        return view('admin.notification');
    }

    public function view_addnotification()
    {
        return view('admin.addnotification');
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
