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
            'users' => User::all()
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

    public function view_feedbacks()
    {
        return view('admin.feedbacks', [
            'feedbacks' => Feedback::all()
        ]);
    }

    public function view_booklist()
    {
        return view('admin.booklist', [
            'books' => Book::all()
        ]);
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
}
