@extends('layout.layout')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2" ><a href="{{route('product.create')}}" class="btn btn-primary float-end ">Add Product</a></div>

    </div>
    <table class="table table-striped table-bordered ">
        <thead>
        <tr>
            <th>S.no</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 1
        @endphp
        @foreach($products as $product)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->name}}</td>
                <td>
                    @if($product->category_id)
                        {{$product->category->name}}
                    @endif
                </td>
                <td>{{$product->price}}</td>

                <td>
                    <img style="height: 80px ; width: 80px" src="{{asset('upload/'.$product->image)}}">
                </td>

                <td>
                    <a href="{{route('product.edit', $product->id )}}" style="font-size: 25px; padding: 5px"> <ion-icon name="create-outline"></ion-icon> </a>

                    <a href="" style="font-size: 25px; padding: 5px"> <ion-icon name="trash-outline"></ion-icon></a>

                </td>
            </tr>

        @endforeach
        </tbody>


    </table>

@endsection
