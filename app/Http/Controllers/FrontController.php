<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function shop()
    {
        return view('front.shop');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function produk()
    {
        return view('front.produk');
    }

    public function about()
    {
        return view('front.about');
    }

    public function produkDetail()
    {
        return view('front.produkdetail');
    }
}
