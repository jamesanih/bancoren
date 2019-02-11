<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{URL::to('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{URL::to('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{URL::to('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page"></body>
    <div class="login-box">
        <div class="logo">
            <a href="{{URL::to('/')}}">Bank <b>Bancoren</b></a>
           <!--  <small>Admin BootStrap Based - Material Design</small> -->
        </div>


        @yield('contents')
        <!-- Jquery Core Js -->
    <script src="{{URL::to('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{URL::to('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{URL::to('plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{URL::to('plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{URL::to('js/admin.js')}}"></script>
    <script src="{{URL::to('js/pages/examples/sign-in.js')}}"></script>
</body>

</html>