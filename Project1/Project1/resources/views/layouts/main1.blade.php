<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title' , 'Mickey Shirts')
    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('dist/css/foundation.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<nav class="navbar-inverse bg-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                SilverHome</a>
        </div>

        <ul class="nav navbar-nav">
            <li class="active"> <a href="{{route('home')}}">หน้าหลัก</a></li>


        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>CART<span class="alert-danger"> 1</span></a>
            </li>
            {{--Auth--}}
            @if(Auth::user())
                <li><a href="{{URL::to('/admin')}}">Profile :
                        <span style="color: #bce8f1">  {{ ucwords(Auth::user()->name) }}  </span></a>


                </li>
                <li><a href="{{URL::to('/logout')}}">

                        <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            @else
                {{--Auth--}}

                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
        </ul>

        </ul>

    </div>
</nav>
</head>
<body>
@yield('content')

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
