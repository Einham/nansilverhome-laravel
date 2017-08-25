@extends('layout.main')

@section('title', 'Shirts')

@section('content')


<div class="album text-muted">

<div class="container">
<h3> สินค้าประเภทแหวน </h3><hr>
<table><tr><td>

      <div class="row">
      @forelse ($showrings as $showring)



          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="item-wrapper">
                <div class="img-wrapper">
                  <a href="#"><img src="{{url('images',$showring->image)}}" style="width:210px">

                  <a href="{{url('cartedit', [$showring->id, $showring->type])}}" class="button expanded add-to-cart" style="width:210px">  เพิ่มลงตะกร้าสินค้า </a>
                   </a>
                 </div>

                <h6>  ชื่อ : {{$showring->name}}</h6>
                <h7>  ราคา :{{$showring->weight*80}} บาท </h7>

              </div>
            </div>



       @empty
          <?php echo "no product"; ?>
       @endforelse
  </div>
</div>



@endsection
</td></tr></table>
