<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;


class MainController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function product(){
        return view('frontend.product');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function checkout(){
        return view('frontend.checkout');
    }

}
