<!DOCTYPE html>
<html class="" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="PIXINVENT">
  <title>ADMIN PANEL</title>
  <link rel="apple-touch-icon" href="">
  <link rel="shortcut icon" type="image/x-icon" href="">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\vendors\css\forms\selects\select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\vendors\css\tables\datatable\datatables.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\vendors\css\pickers\daterange\daterangepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\vendors\css\pickers\pickadate\pickadate.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\core\menu\menu-types\vertical-menu.css')}}">

   <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\core\colors\palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\plugins\pickers\daterange\daterange.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ url('backend\app-assets\css\core\colors\palette-gradient.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('backend\assets\css\style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">

@include('layouts.header')


@include('layouts.sidebar')


  @yield('content')




   @include('layouts.footer')

   @include('sweetalert::alert')

  <!-- BEGIN VENDOR JS-->
  <script src="{{ url('backend\app-assets\vendors\js\vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
   <script src="{{ url('backend\app-assets\vendors\js\forms\select\select2.full.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\tables\datatable\datatables.min.js')}}" type="text/javascript"></script>


  <script src="{{ url('backend\app-assets\vendors\js\pickers\pickadate\picker.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\pickers\pickadate\picker.date.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\pickers\pickadate\picker.time.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\pickers\pickadate\legacy.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\pickers\dateTime\moment-with-locales.min.js')}}"
  type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\vendors\js\pickers\daterange\daterangepicker.js')}}"
  type="text/javascript"></script>

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ url('backend\app-assets\js\core\app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\js\core\app.js')}}" type="text/javascript"></script>
  <script src="{{ url('backend\app-assets\js\scripts\customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ url('backend\app-assets\js\scripts\tables\datatables-extensions\datatables-sources.js')}}"
  type="text/javascript"></script>

   <script src="{{ url('backend\app-assets\js\scripts\forms\select\form-select2.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  </body>

</html>