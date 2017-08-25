@extends('layouts.main1')

@section('content')
    {{-- Side Navigation --}}
    <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href="{{url('admin')}}"><i class="glyphicon glyphicon-home"></i>
                        โปรไฟล์ของฉัน</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Order
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->

                </li>
            </ul>
        </div>
    </div> <!-- ADMIN SIDE NAV-->


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
