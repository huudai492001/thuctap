@extends('layout.layout')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif
    <a href="#" class="btn btn-primary"> Add Category</a>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>S.no</th>
            <th>Category Name</th>
            <th>Parent Category Name</th>
            <th>Category created</th>
            <th>Action</th>
        </tr>
        </thead>
        {{--        <tbody>--}}
        {{--        @php--}}
        {{--            $i = 1--}}
        {{--        @endphp--}}
        {{--        @foreach($products as $product)--}}
        {{--            <tr>--}}
        {{--                <td>{{$i++}}</td>--}}
        {{--                <td>{{$product->name}}</td>--}}
        {{--                <td>--}}
        {{--                    @if($product->category_id)--}}
        {{--                        {{$product->category->name}}--}}
        {{--                    @endif--}}
        {{--                </td>--}}
        {{--                <td>{{$product->price}}</td>--}}

        {{--                <td>--}}
        {{--                    <img style="height: 80px ; width: 80px" src="{{asset('upload/'.$product->image)}}">--}}
        {{--                </td>--}}
        {{--                <td ><button class="btn btn-primary">--}}
        {{--                        <a style="color:black" href="{{route('details', $product->id)}}">--}}
        {{--                            Add Detail Product--}}
        {{--                        </a>--}}

        {{--                    </button>--}}
        {{--                </td>--}}
        {{--                <td>--}}
        {{--                    <a href="{{route('product.edit', $product->id)}}" style="font-size: 25px; padding: 5px"> <i class="fa fa-edit"></i></a>--}}
        {{--                    |--}}
        {{--                    <a href="{{route('product.delete', $product->id)}}" style="font-size: 25px; padding: 5px"> <i class="fa fa-trash"></i></a>--}}

        {{--                </td>--}}
        {{--            </tr>--}}

        {{--        @endforeach--}}
        {{--        </tbody>--}}


    </table>

@endsection
