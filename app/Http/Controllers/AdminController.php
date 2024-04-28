<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('admin.reports');
    }

    public function view_feedbacks()
    {
        return view('admin.feedbacks');
    }

    public function view_booklist()
    {
        return view('admin.booklist');
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
        return view('admin.review');
    }

    public function view_bookdetail()
    {
        return view('admin.bookdetail');
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
}
