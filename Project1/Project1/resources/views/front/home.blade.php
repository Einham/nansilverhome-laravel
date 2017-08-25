@extends('layout.main')

@section('content')



      <section class="jumbotron text-xs-left">
        <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

          <h1 class="jumbotron-heading">เฮือนเงิน</h1>
          <p class="lead text-muted">ผลิตและจำหน่ายเครื่องเงิน</p>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">

             <div class="card">

                <a href="{{route('shirts')}}"><img src="{{url('/images/promo1.jpg')}}" alt="Sandwich" style="width:100%"></a>
              <h4>ปิ่นปักผม</h4>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

             </div>
             <div class="card">

                <a href="{{route('necklace')}}"><img src="{{url('/images/promo2.jpg')}}" alt="Sandwich" style="width:100%"></a>
                <h4>สร้อยคอ</h4>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

             </div>
             <div class="card">

                <a href="{{route('shirts')}}"><img src="{{url('/images/promo3.jpg')}}" alt="Sandwich" style="width:100%"></a>
                <h4>เข็มขัด</h4>
               <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

             </div>
             <div class="card">

                 <a href="{{route('shirts')}}"><img src="{{url('/images/promo4.jpg')}}" alt="Sandwich" style="width:100%"></a>
                  <h4>กำไล</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

              </div>
              <div class="card">

                  <a href="{{route('shirts')}}"><img src="{{url('/images/promo6.jpg')}}" alt="Sandwich" style="width:100%"></a>
                    <h4>พาน</h4>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

               </div>
               <div class="card">

                   <a href="{{route('shirts')}}"><img src="{{url('/images/promo7.jpg')}}" alt="Sandwich" style="width:100%"></a>
                    <h4>ช้าง</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                </div>
        </div>

 </div>


      <footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Back to top</a>
          </p>
          <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
        </div>
      </footer>
@endsection
