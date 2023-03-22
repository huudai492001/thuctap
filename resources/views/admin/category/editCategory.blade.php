@extends('layout.layout')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h3>Edit Category</h3>
                        </div>
                    </div>


                </div>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('success')}}
                </div>
            @endif
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12">
                        <form id="demo-form2" action="{{route('category.update', $category->id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="form-group d-flex">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub category of
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" value="{{$category->name}}" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group d-flex">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category name
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="first-name" name="category_id"  class="form-control col-md-7 col-xs-12">
                                        <option value="">No Subcategory </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--             <div class="ln_solid"></div> tạo ra một thanh ngang      --}}
                            <div class="ln_solid"></div>
                            <div class="form-group d-flex">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <div class="">
                                        <input style="margin-top:25px; margin-left: 450px"  type="submit" class="btn btn-success" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
