<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{env('APP_NAME')}}</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link href="assets/css/morris.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>
<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    

    <div id="app"></div>

    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <!-- <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script> -->
    <!-- Popup message jquery -->
    <!-- <script src="assets/js/jquery.toast.js"></script> -->
    <!-- Chart JS -->
    <!-- <script src="assets/js/dashboard1.js"></script>
    <script src="assets/js/jquery.toast.js"></script> -->


<div class="jq-toast-wrap top-right"><div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #ff6849;"></span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">Welcome to Elite admin</h2>Use the predefined ones, or specify a custom position object.</div></div>


<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>