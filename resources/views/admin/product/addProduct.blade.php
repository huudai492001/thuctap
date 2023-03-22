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
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <form id="demo-form2" action="{{route('product.store')}}" method="post" enctype="multipart/form-data"
                                  data-parsley-validate class="form-horizontal form-label-left" >
                                @csrf
                                <div class="form-group d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" placeholder="Input product name here" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group d-flex" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Product Price
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="first-name" placeholder="Input product name here" name="price" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group  d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file"  name="image" required="" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group  d-flex">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select type="text" id="first-name" name="category_id"  class="form-control col-md-7 col-xs-12">
                                            <option value="">No Subcategory </option>
                                            @foreach($categories as $categories)
                                                <option value="{{$categories->id}}">{{$categories->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--             <div class="ln_solid"></div> tạo ra một thanh ngang      --}}
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="submit" style="margin-left: 500px; margin-top: 27px" class="btn btn-success" value="Submit">
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
