<?php

namespace App;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class Order extends Model
{
    protected $fillable = ['total','delivered'];


  public static function createOrder()
  {
        $user=Auth::user();
      //  dd($user);
        $orders = $user->orders()->create([
          'total'=>Cart::total(),
          'delivered'=> 0
      ]);

  }
}
