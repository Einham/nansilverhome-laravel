<?php

use Illuminate\Support\Facades\Mail;
namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Ring;
use App\Necklace;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cartItems = Cart::content();
      $subtotal = Cart::subtotal();

      return view('cart.index',compact('cartItems'),compact('subtotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $type)
    {

      if ($type == 'ring')
      {
        $productring = Ring::find($id);
        Cart::add(['id' => $id,
                    'name' => $productring->name,
                    'qty'=> 1,
                    'price' => $productring->weight*100,
                    'options'=>array($productring->type,$productring->weight)]);

          // return $id . ', ' . $type . 'ring55555';
          return back();
      }
      elseif ($type == 'necklace')
      {
          $productring = Necklace::find($id);
          Cart::add(['id' => $id,
                      'name' => $productring->name,
                      'qty'=> 1,
                      'price' => $productring->weight*100,
                      'options'=>array($productring->type,$productring->weight)]);

          // return $id . ', ' . $type . 'necklace';
          return back();
      }
      else return 'error i sus';




    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Mail::to('chutchanun39@gmail.com')->send(new MailOrderShipped());
        return 'ddd';
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back();
    }
}
