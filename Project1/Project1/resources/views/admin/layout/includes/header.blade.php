<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                เฮือนเงิน</a>
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
                {{--<li><a href="">--}}
                        {{--<span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }} :   </span></a>--}}
                {{--</li>--}}
                <li><a href="{{URL::to('/admin')}}">
                        <span style="color: #bce8f1"></span>โปรไฟล์</a>

                </li>
                <li><a href="{{URL::to('/logout')}}">
                        <span style="color: #bce8f1">{{ ucwords(Auth::user()->name) }} : </span>

                        <span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ</a></li>
            @else
                Auth
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>สมัครสมาชิก</a></li>
                <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</a></li>
            @endif
        {{--</ul>--}}
        </ul>
    </div>
</nav>
