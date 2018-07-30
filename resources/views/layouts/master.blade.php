<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{URL::to('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">


    <link href="{{URL::to('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />


    <!-- Waves Effect Css -->
    <link href="{{URL::to('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{URL::to('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{URL::to('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{URL::to('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{URL::to('css/themes/all-themes.css')}}" rel="stylesheet" />
    @yield('styles')



    <script src="{{URL::to('plugins/jquery/jquery.min.js')}}"></script>

</head>
<body class="theme-red">
   
@include('partials.header')

@yield('contents')





   <!-- Bootstrap Core Js -->
    <script src="{{URL::to('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
   
    <!-- Slimscroll Plugin Js -->
    <script src="{{URL::to('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{URL::to('plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{URL::to('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{URL::to('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{URL::to('plugins/morrisjs/morris.js')}}"></script>

   <!-- Jquery DataTable Plugin Js -->
   <script src="{{URL::to('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{URL::to('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{URL::to('js/admin.js')}}"></script>
    <script src="{{URL('js/pages/tables/jquery-datatable.js')}}"></script>

   
    <!-- Sparkline Chart Plugin Js -->
    <script src="{{URL::to('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <!-- <script src="{{URL::to('js/admin.js')}}"></script> -->
    <script src="{{URL::to('js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{URL::to('js/demo.js')}}"></script>



</body>
</html>