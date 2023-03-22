@extends('layout.layout')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-10">

        </div>
        <div class="col-md-2 ">
            <a href="{{route('category.create')}}" class="btn btn-primary btn-sm float-end"> Add Category</a>
            </div>
    </div>
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
                <tbody>
                @php
                    $i = 1
                @endphp
                @foreach($categories as $categorie)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$categorie->name}}</td>
                        <td>
                            @if($categorie->category_id)
                                {{$categorie->parent->name}}
                            @else
                                No parent id
                            @endif
                        </td>
                        <td>
                            {{$categorie->created_at}}
                        </td>

                        <td>

                            <a href="{{route('category.edit', $categorie->id)}}" style="font-size: 25px; padding: 5px"> <ion-icon name="create-outline"></ion-icon> </a>

                            <a href="{{route('category.destroy', $categorie->id)}}" style="font-size: 25px; padding: 5px"> <ion-icon name="trash-outline"></ion-icon></a>
{{--                            <a href="javascript:void(0)" style="font-size: 25px; padding: 5px;" data-id="{{$categorie->id}}" class="category_delete" >--}}
{{--                                <ion-icon name="trash-outline"></ion-icon> </a>--}}
                        </td>
                    </tr>

                @endforeach
                </tbody>


    </table>

@endsection
{{--@push('footer-script')--}}
{{--    <script>--}}

{{--        $('.category_delete').on('click', function (){--}}
{{--            if(confirm('Are you delete this category')){--}}
{{--                var id = $(this).data('id');--}}
{{--                $.ajax({--}}
{{--                    url: '{{route('category.destroy')}}',--}}
{{--                    method: 'post',--}}
{{--                    data:{--}}
{{--                        _token:"{{csrf_token()}}",--}}
{{--                        'id':id--}}
{{--                    },--}}
{{--                    success:function (data){--}}
{{--                        location.reload();--}}
{{--                    }--}}

{{--                })--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

{{--@endpush--}}
