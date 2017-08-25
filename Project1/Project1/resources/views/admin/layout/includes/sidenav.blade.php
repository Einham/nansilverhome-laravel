
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Show
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">Product</a></li>
                    <li><a href="{{route('ring.index')}}"> ring</a></li>
                    <li><a href="{{route('necklace.index')}}"> necklace</a></li>
                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Create
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                  <li><a href="{{route('product.create')}}">Add product</a></li>
                   <li><a href="{{route('ring.create')}}">Add ring</a></li>
                   <li><a href="{{route('necklace.create')}}"> Add necklace</a></li>
                </ul>
              </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Category
                    <span class="caret pull-right"></span>
                </a>

                <ul>



                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
                    <li><a href="{{url('admin/orders')}}">All Orders</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
