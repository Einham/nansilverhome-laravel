@extends('layout.main')

@section('content')
<div class="row">
<br>
<h3> ตะกร้าสินค้า </h3>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>weight</th>
      <th>qty</th>
      <th>type</th>
      <th>price</th>
      <th>action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($cartItems as $cartItem)
    <tr>
        <td>{{$cartItem->name}}</td>
        <td>{{$cartItem->options[1]}}</td>
        <td>{{$cartItem->qty}}</td>
        <td>{{$cartItem->options[0]}}</td>
        <td>{{$cartItem->price}}</td>
        <td>
          <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
          </form>

        </td>
    </tr>



    @endforeach


  </tbody>


</table>

ยอดรวมทั้งหมด : {{$subtotal}} บาท
<br>
<br>
<a href="{{route('sendemail.tomail')}}" class="button">Checkout</a>
<!-- <form action="{{route('sendemail.tomail')}}" method="get">

  <input class="btn btn-sm btn-danger" type="submit" value="ยืนยัน">
</form> -->

</div>
@endsection
