<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage',[
            'book' => Book::inRandomOrder()->limit(12)->get(),
            'book_fiction' => Book::where('category_id', 1)->limit(3)->get(),
            'book_bm' => Book::where('category_id', 7)->limit(3)->get(),
            'book_md' => Book::where('category_id', 3)->limit(3)->get(),
            'book_tya' => Book::where('category_id', 11)->limit(3)->get()
        ]);

    }

    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        $name=Auth::user()->name;

        if($usertype=='1' || $name=='admin')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.userpage',[
                'book' => Book::inRandomOrder()->limit(12)->get(),
                'book_fiction' => Book::where('category_id', 1)->limit(3)->get(),
                'book_bm' => Book::where('category_id', 7)->limit(3)->get(),
                'book_md' => Book::where('category_id', 3)->limit(3)->get(),
                'book_tya' => Book::where('category_id', 11)->limit(3)->get()
            ]);

        }

    }

}

