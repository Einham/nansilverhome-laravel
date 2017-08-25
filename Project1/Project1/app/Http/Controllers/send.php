<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class send extends Controller
{
  public function index()
  {
    Mail::to('chutchanun39@gmail.com')->send(new OrderShipped());

  
  }
}
