<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;


class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $news = News::all();
        return view('frontend.index',compact('products','news'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function blog()
    {
        $news = News::paginate(3);
        return view('frontend.blog',compact('news'));
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
