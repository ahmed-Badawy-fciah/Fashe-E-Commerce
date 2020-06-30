<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        return view('admin.orders');
    }

    public function products()
    {
        return view('admin.produccts');
    }

    public function blogs()
    {
        return view('admin.blog.blogs');
    }

    public function tags()
    {
        return view('admin.blog.tags');
    }

    public function replies()
    {
        return view('admin.blog.replies');
    }
    
}
