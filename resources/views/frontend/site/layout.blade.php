{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 06/08/2017--}}
 {{--* Time: 14:04--}}
 {{--*/--}}
        <!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>AppsHome - FrontEnd</title>

    <meta name="description" content="DESCRIPTION">
    <meta name="author" content="iMokhles">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset("appshome_front/img/favicon.png")}}">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon57.png")}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon72.png")}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon76.png")}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon114.png")}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon120.png")}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon144.png")}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon152.png")}}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{asset("appshome_front/img/icon180.png")}}" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{asset("appshome_front/css/bootstrap.min.css")}}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{asset("appshome_front/css/plugins.css")}}?{{time()}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{asset("appshome_front/css/main.css")}}?{{time()}}">

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{asset("appshome_front/css/themes.css")}}?{{time()}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{asset("appshome_front/js/vendor/modernizr.min.js")}}"></script>
</head>
<body>
<!-- Page Container -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!-- 'boxed' class for a boxed layout -->
<div id="page-container">

@yield('page-container')

</div>
<!-- END Page Container -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="{{asset("appshome_front/js/vendor/jquery.min.js")}}?{{time()}}"></script>
<script src="{{asset("appshome_front/js/vendor/bootstrap.min.js")}}?{{time()}}"></script>
<script src="{{asset("appshome_front/js/plugins.js")}}?{{time()}}"></script>
<script src="{{asset("appshome_front/js/app.js")}}?{{time()}}"></script>
@yield('after_scripts')
</body>
</html>