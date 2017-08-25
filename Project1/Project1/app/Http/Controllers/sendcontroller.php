<?php

namespace App\Http\Controllers;
use App\Mail\MailOrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class sendcontroller extends Controller
{
  public function index(Request $request, $id)
  {


      // Mail::to('chutchanun39@gmail.com')->send(new MailOrderShipped());
    // Mail::to('chutchanun39@gmail.com')->send(new OrderShipped());
    // return $id;
    //  return $cartItem;
  }

  public function toorders(Request $request)
  {
      $order = Order::createOrder();

    //   $user=Auth::user();
    //   $orders = $user->orders()->create([
    //     'total'=>Cart::total(),
    //     'delivered'=> 0
    // ]);

      $user=Auth::id();
      $orders = Order:: where('user_id', '=',$user)->get();
      Mail::to('chutchanun39@gmail.com')->send(new MailOrderShipped());
    //  $orders = Order:: where('user_id')->get();
      //Cart::destroy();

      return view ('front.showorder', compact('orders'));

      // $orders = Order:: where('user_id', '=',$user)->get();
      // return view ('front.to_cart_order', compact('orders'));
      // return view ('front.to_cart_order', compact('orders'));
  }
}
