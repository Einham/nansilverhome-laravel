<?php

namespace App\Http\Controllers;

use App\Ring;
use Illuminate\Http\Request;

class RingController extends Controller
{
  public function index()
  {
       $prosucts = Ring::all();
       return view('admin.ring.index', compact('prosucts'));
  }

  public function create()
  {
      // $prosucts = Product::all();
      // return view('admin.product.index', compact('prosucts'));
      return view('admin.ring.creat');
  }

  public function store(Request $request)
  {
      $formInput=$request->except('image');
      $image = $request->image;
      if($image)
      {
          $imageName=$image->getClientOriginalName();
          $image->move('images', $imageName);
          $formInput['image']=$imageName;
      }
    
      Ring::create($formInput);

    return redirect()->route('admin.index');

  }
}
