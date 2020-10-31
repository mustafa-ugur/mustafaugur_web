<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets_front/img/icon/fabicon.png">
    <link rel="stylesheet" href="/assets_front/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/animate.min.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/modal-video.min.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/slick.css">
    <link rel="stylesheet" href="/assets_front/css/plugins/stellarnav.css">
    <link rel="stylesheet" href="/assets_front/css/theme.css">
</head>
<body class="dark-theme primay_bg">

<div class="preloader dark-p">
    <div>
        <div class="nb-spinner"></div>
    </div>
</div>
@include('bolum.header')
@yield('content')
@include('bolum.footer')

<script src="/assets_front/js/plugins/jquery.2.1.0.min.js"></script>
<script src="/assets_front/js/plugins/bootstrap.min.js"></script>
<script src="/assets_front/js/plugins/jquery.nav.js"></script>
<script src="/assets_front/js/plugins/jquery.waypoints.min.js"></script>
<script src="/assets_front/js/plugins/jquery-modal-video.min.js"></script>
<script src="/assets_front/js/plugins/owl.carousel.js"></script>
<script src="/assets_front/js/plugins/popper.min.js"></script>
<script src="/assets_front/js/plugins/circle-progress.js"></script>
<script src="/assets_front/js/plugins/wow.min.js"></script>
<script src="/assets_front/js/plugins/slick.min.js"></script>
<script src="/assets_front/js/plugins/stellarnav.js"></script>
<script src="/assets_front/js/main.js"></script>
</body>
</html>
