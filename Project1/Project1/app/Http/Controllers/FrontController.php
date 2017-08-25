<?php

namespace App\Http\Controllers;

use App\Product;
use App\Ring;
use App\Necklace;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      $show = Product::all();
        return view('front.home', compact('show'));
    }

    public function shirts()
    {

      // $showrings = Category::find(1)->products;
      //   return view('front.shirts', compact('showrings'));
      $showrings = Ring::all();
      return view('front.shirts',compact('showrings'));
    }
    public function necklace()
    {

      // $showrings = Category::find(1)->products;
      //   return view('front.shirts', compact('showrings'));
      $showrings = Necklace::all();
      return view('front.necklace',compact('showrings'));
    }

    public function shirt()
    {
        return view('front.shirt');
    }
}
