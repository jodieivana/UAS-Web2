<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_userlist()
    {
        return view('admin.userlist');
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
}
