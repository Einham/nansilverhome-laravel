<?php

namespace App\Http\Controllers;
use App\Necklace;
use Illuminate\Http\Request;

class necklaceController extends Controller
{
  public function index()
  {
       $prosucts = Necklace::all();
       return view('admin.necklace.index', compact('prosucts'));
  }

  public function create()
  {
      // $prosucts = Product::all();
      // return view('admin.product.index', compact('prosucts'));
      return view('admin.necklace.create');
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
      Necklace::create($formInput);

    return redirect()->route('admin.index');
//
  }
}
