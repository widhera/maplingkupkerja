<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/dist/css/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets3/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">


    <!-- Theme CSS -->
    <link href="{{asset('assets/css/freelancer.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('additional_css')
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    @include('layouts.navbar')
    
    @yield('content')
    
    <!-- Footer -->
    @include('layouts.footer')
    <!-- jQuery -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets3/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets3/dist/js/bootstrap-select.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('assets/js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('assets/js/freelancer.min.js')}}"></script>
    @yield('additional_js')
</body>

</html>
