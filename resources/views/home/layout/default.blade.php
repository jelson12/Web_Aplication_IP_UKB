<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>@yield('title', 'Newspaper')</title>

    {{-- <link rel="shortcut icon" href="assets/img/favicon.png"> --}}

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/IP.ico') }}">

    {{-- Font --}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    {{-- CSS --}}

    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    @yield('custom_css_pre')

</head>

<body>

    <div class="main-wrapper">

        {{-- Header start --}}
            @include('home.components.header')
        {{-- Header end --}}


        {{-- Main content start --}}
        @yield('content')
        {{-- Main content end --}}
        {{-- footer start --}}
            @include('home.components.footer')
        {{-- footer end --}}
        <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <script>
        "use strict";
        var o = "rtl" === $("html").attr("data-textdirection");
        @if (session('logout'))
        toastr.success("{{ session('logout') }}",
            '', {
                closeButton: !0,
                tapToDismiss: !0,
                progressBar: !0,
                positionClass: "toast-bottom-right",
                rtl: o
            }
        );
        @endif
    </script>

@if(session('login'))
<script>
    $(document).ready(function() {
        var o = $("html").attr("data-textdirection") === "rtl";
        toastr.success("{{ session('login') }}", "", {
            closeButton: true,
            tapToDismiss: true,
            progressBar: true,
            positionClass: "toast-bottom-right",
            rtl: o
        });
    });
</script>
@endif

    @yield('custom_js_pre')


</body>

</html>
