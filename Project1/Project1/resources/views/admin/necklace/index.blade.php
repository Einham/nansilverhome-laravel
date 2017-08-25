@extends('admin.layout.admin')

@section('content')

    <h3>Show Necklace</h3>

    <ul>
        @forelse($prosucts as $product)
            <div class="w3-quarter">
            <li>
                <h4>ชื่อสินค้า : {{$product->name}}</h4>
                <h4>น้ำหนักสินค้าct : {{$product->weight}}</h4>
                <img src="{{url('images', $product->image)}}"alt="Paris" width="300" />

              

                <form action="{{route('product.destroy',$product->id)}}"  method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                </form>
                </br>
                </br>
                </br>
            </li>
            </div>
            {{--<div class="small- columns">--}}
                {{--<div class="item-wrapper">--}}
                    {{--<div class="img-wrapper">--}}
                        {{--<a href="#">--}}
                           {{----}}
                            {{--<img src="paris.jpg" alt="Paris" width="400" height="300">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        @empty

            <h3>No products</h3>

        @endforelse
    </ul>


@endsection
