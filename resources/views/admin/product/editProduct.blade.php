@extends('layout.layout')
@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data"
                                  data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="form-group d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select  name="category_id"  class="form-control col-md-7 col-xs-12">
                                            <option value="">Category Name</option>
                                            @foreach($categories as $categorie)
                                                <option value="{{$categorie->id}}" @if($product->category_id==$categorie->id) selected @endif>
                                                    {{$categorie->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="{{$product->name}}" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Price
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="{{$product->price}}" name="price" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file"  name="image"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md3 col-sm-3 col-xs-12"></div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img style="height: 80px ; width: 80px"
                                             src="{{asset('upload/'. $product->image)}}">
                                    </div>
                                </div>

                                {{--             <div class="ln_solid"></div> tạo ra một thanh ngang      --}}
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="submit" class="btn btn-success" value="Submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
