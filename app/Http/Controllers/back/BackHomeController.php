<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackHomeController extends Controller
{
    public function index()
    {
        return view('back.homepage');
    }
    public function blog()
    {
        return view('back.blog');
    }

    public function comment()
    {
        return view('back.comment');
    }

    public function category()
    {
        return view('back.category');
    }

    public function video()
    {
        return view('back.video');
    }

    public function project()
    {
        return view('back.project');
    }

    public function concact()
    {
        return view('back.concact');
    }

    public function userlist()
    {
        return view('back.userlist');
    }

    public function user()
    {
        return view('back.user');
    }




}
