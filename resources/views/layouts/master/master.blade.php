<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <title>    TASK - </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <!-- Favicon -->
    <link href="{{ asset('assets/img/logo.jpeg')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css')}}" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    
    {{-- Dropify --}}
    <link href="{{ asset('admin_assets\css\fileupload.css') }}" rel="stylesheet" />
    
    
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    
    
<link href="{{ asset('assets/web/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    @yield('css')
</head>
<body>
        <div class=" loader-wrapper">
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner"></div>
            </div>
        </div>

        @include('layout.header')
        @yield('content')
        @include('layout.footer')

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/ajaxActions.js') }}"></script>

        
        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        <script src="{{ asset('assets/web/contactform/contactform.js')}}"></script>
        <script src="{{ asset('admin_assets\js\dropify.js') }}"></script>
        <script src="{{ asset('admin_assets\js\fileupload.js') }}"></script>
        <script>
            $('.dropify').dropify();
        </script>
    @yield('js')
</body>

</html>