<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="{{route('user.index')}}">User</a></h1>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{url('/')}}">Front Endsss</a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="{{route('home')}}">--}}
                {{--<i class="fa fa-home fa-lg" aria-hidden="true"></i>--}}
                {{--WebSiteName</a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li class="active"> <a href="{{route('home')}}">Home</a></li>--}}


            {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="{{route('shirts')}}">SHIRTS</a></li>--}}
                    {{--<li><a href="#">CONTACT</a></li>--}}
                    {{--<li><a href="#">Page 1-3</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#">Page 2</a></li>--}}
        {{--</ul>--}}
        {{--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
        {{--<li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}

        {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true">--}}
                    {{--</i>CART<span class="alert-danger"> 1</span></a>--}}
            {{--</li>--}}

            {{--Auth--}}
            {{--@if(Auth::user())--}}
                {{--<li><a href="{{URL::to('/admin')}}">--}}
                        {{--<span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }} :   </span>Profile</a>--}}

                {{--</li>--}}
                {{--<li><a href="{{URL::to('/logout')}}">--}}
                        {{--<span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }}</span>--}}
                        {{--<span class="glyphicon glyphicon-log-in"></span> Logout</a></li>--}}
            {{--@else--}}
                {{--Auth--}}

                {{--<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
                {{--<li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
            {{--@endif--}}
        {{--</ul>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}