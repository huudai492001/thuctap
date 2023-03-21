
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
{{--    <link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="{{asset('themes/css/base.css')}}" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->

    <link href="{{asset('themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>

    <link href="{{asset('themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- =============== SideBar ================ -->

        @include('layout.sidebar')

    <!-- ========================= Main ==================== -->
    <div class="right-col" role="main">
        <div class="main">
            @include('layout.header')

            <!-- ======================= Cards ================== -->

            <!-- ================ Order Details List ================= -->
            <div class="details">
                @yield('content')
            </div>
        </div>
    </div>


<!-- =============== End SideBar ================ -->

@include('layout.footer')
</body>

</html>
