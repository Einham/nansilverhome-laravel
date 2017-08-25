@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

    <ul>
        @forelse($prosucts as $product)
            <div class="w3-quarter">
            <li>
                <h4>Name of product : {{$product->name}}</h4>
                <h4>Name of product : {{$product->weight}}</h4>
                <img src="{{url('images', $product->image)}}"alt="Paris" width="300" height="300"/>

                <h4>Category : {{count($product->category)?$product->category->category_name:"N/A"}}</h4>

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
