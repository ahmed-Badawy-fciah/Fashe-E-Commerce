<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function about()
    {
        return view('main.about');
    }
    
    public function contact()
    {
        return view('main.contact');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function cart()
    {
        return view('main.cart');
    }
    public function product()
    {
        return view('main.product');
    }

    public function profile()
    {
        return view('main.profile');
    }
}
