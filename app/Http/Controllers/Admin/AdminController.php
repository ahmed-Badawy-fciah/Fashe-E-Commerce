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

    public function customers()
    {
        return view('admin.customers');
    }

    public function orders()
    {
        return view('admin.orders');
    }

    public function reviews()
    {
        return view('admin.reviews');
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
    
    public function employees()
    {
        return view('admin.system.employees');
    }

    public function roles()
    {
        return view('admin.system.roles');
    }

    public function permissions()
    {
        return view('admin.system.permissions');
    }

    public function categories()
    {
        return view('admin.product.categories');
    }

    public function products()
    {
        return view('admin.product.products');
    }

    public function sizes()
    {
        return view('admin.product.sizes');
    }

    public function colors()
    {
        return view('admin.product.colors');
    }
}
