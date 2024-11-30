<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;


class MainController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(8);
        $news = News::latest()->limit(3);
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function product()
    {
        $products = Product::latest()->paginate(8);
        return view('frontend.product');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }

}
