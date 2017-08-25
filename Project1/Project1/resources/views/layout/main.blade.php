<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    </style>

     <link href="css/album.css" rel="stylesheet">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
     <!-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> -->

   <link rel="stylesheet" href="css/album.css">


     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
     <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/admin.css')}}">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->


     <title>W3.CSS Template</title>
     <title>
         @yield('title' , 'Mickey Shirts')
     </title>
   </head>
   <body>

          <nav class="navbar-inverse bg-inverse">

              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="{{route('home')}}">
                          <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                          HomeSilver</a>
                  </div>

                  <ul class="nav navbar-nav">
                      <li class="active"> <a href="{{route('home')}}">หน้าหลัก</a></li>

                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ประเภทสินค้า </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('shirts')}}">แหวน</a></li>
                                <li><a href="{{route('necklace')}}">สรัอยคอ</a></li>
                                <li><a href="#">กำไล</a></li>
                                <li><a href="#">ต่างหู</a></li>
                            </ul>
                        </li>

                      <li><a href="#">วิธีดูแลรักษา</a></li>
                      <li><a href="#">การซื้อสินค้า</a></li>
                      <li><a href="#">วิธีชำระเงิน</a></li>
                      <li><a href="{{url('/foo')}}">contact us</a></li>


                  </ul>

                          <ul class="nav navbar-nav navbar-right">
                              <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                              </i>ตะกร้าสินค้า<span class="alert-danger"> {{Cart::count()}}</span></a>
                              </li>
                              {{--Auth--}}
                              @if(Auth::user())
                                  <li><a href="{{URL::to('/admin')}}">
                                          <span style="color: #bce8f1"></span>โปรไฟล์</a>

                                  </li>
                              <li><a href="{{URL::to('/logout')}}">
                                      <span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }} : </span>
                                      <span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ</a></li>
                              @else
                                  {{--Auth--}}

                                  <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a></li>
                                  <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</a></li>
                              @endif
                          </ul>

                  </ul>

              </div>
          </nav>
          <style>
          table, th, td {
            border:0px;
             -webkit-border-radius:20px;
             -moz-border-radius:20px;


          }
          </style>
@yield('content')


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>


</body>
</html>
