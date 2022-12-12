<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT-AWESOME  -->
    <script src="{{asset('/')}}https://kit.fontawesome.com/434f764404.js"></script>
    <!-- link Bootstrap  -->
    <title>{{$gs->title}}</title>
    <!-- FAVICON  -->
@include('backend.layouts.includes.favicon')

    <!-- FAVICON  -->

    <link rel="stylesheet" href="{{asset('/')}}vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/')}}vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}javascript/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/')}}css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="{{asset('/')}}css/signin.css">
</head>
<body>

@yield('content')

<script src="{{asset('/')}}js/bootstrap.bundle.min.js"></script>
</body>
</html>
