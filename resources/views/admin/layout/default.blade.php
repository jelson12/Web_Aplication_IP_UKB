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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    {{-- CSS --}}

    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">


    {{-- Custom CSS --}}

    @yield('custom_css_pre')

</head>

<body>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('admin.components.sidebar')
        <div class="content">
            {{-- Header start --}}
                @include('admin.components.menu')
            {{-- Header end --}}


            {{-- Main content start --}}
            @yield('content')
            {{-- Main content end --}}
            {{-- footer start --}}
                @include('admin.components.footer')
            {{-- footer end --}}

        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{ asset('assets/js/main1.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

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
