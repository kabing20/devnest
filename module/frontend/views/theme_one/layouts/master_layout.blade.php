<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @if(isset($profile['meta_logo']))
    <meta property="og:image" content="{{ $profile['meta_logo'] }}" />
      <!--====== Favicon Icon ======-->
    <link rel="icon" href="{{$profile['meta_logo'] }}"
    type="image/png">
    @endif
    {{-- <title>{{ $title.' | '.config('app.name') }}</title> --}}



    <!--====== fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('static_asset/frontend/theme_one/slick-file/slick/slick-theme.css') }}"/>
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/font-awesome.min.css') }}">
    <!--====== MD bootstrap ======-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/all.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/mdb.min.css') }}">

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('static_asset/frontend/theme_one/cdn/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!--====== MD bootstrap ======-->


    <!--====== fancybox ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <!--====== wow animate css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/animate.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/style.css') }}">
    <style>
        .form-error-message {
            color: red;

        }
    </style>

</head>
<body>

@include($theme_path.'.particle.header')


@yield('content')

@include($theme_path.'.particle.footer')

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('static_asset/frontend/theme_one/slick-file/slick/slick.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--====== wow js======-->
<script src="{{ asset('static_asset/frontend/theme_one/js/wow.min.js') }}"></script>


<script src="{{ asset('static_asset/frontend/theme_one/js/custom.js') }}"></script>
<script src="{{ asset('static_asset/admin/theme_one/plugins/notify/sweetalert.min.js') }}"></script>

<script>
    @if(session('success'))
    swal("Success!", "{{ session('success') }}", "success");
    @endif

    @if(session('error'))
    swal("Sorry!", "{{ session('error') }}", "error");
    @endif


</script>
@stack('js')
</body>
</html>
