<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function show_blog()
    {
        return view('client.blog_show');
    }

    public function products()
    {
        return view('client.shop');
    }

    public function product_show()
    {
        return view('client.product_show');
    }

    public function checkout()
    {
        return view('client.checkout');
    }
}
