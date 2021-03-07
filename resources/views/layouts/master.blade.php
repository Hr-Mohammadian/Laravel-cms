<!DOCTYPE html>
<?php $direction = 'ltr';
$css = 'bootstrap.min.css';
$bootstrap = 'bootstrap.min.js';

?>
<html dir="{{$direction}}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset("/$direction/images/favicon.ico") }}">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset("/$direction/plugins/morris/morris.css") }}">

    <!-- App css -->
    <link href="{{ asset("/$direction/css/$css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/core.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/components.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/icons.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/pages.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/menu.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/$direction/css/responsive.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("/custom/css/custom.css") }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset("/$direction/plugins/morris/morris.min.js") }}"></script>
    <script src="{{ asset("/$direction/plugins/raphael/raphael-min.js") }}"></script>

    <script src="{{ asset("/$direction/js/modernizr.min.js") }}"></script>
    @yield('header')

</head>


<body class="fixed-left"> {{-- check this --}}

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
@include('layouts.topbar')
<!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
@include('layouts.sidemenu')
<!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
            @yield('body') <!-- content -->
            </div>
        </div>
        <footer class="footer text-right">
            2016 © Adminto.
        </footer>

    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
@include('layouts.sidebar')
<!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset("/$direction/js/jquery.min.js") }}"></script>
<script src="{{ asset("/$direction/js/$bootstrap") }}"></script>
<script src="{{ asset("/$direction/js/detect.js") }}"></script>
<script src="{{ asset("/$direction/js/fastclick.js") }}"></script>
<script src="{{ asset("/$direction/js/jquery.blockUI.js") }}"></script>
<script src="{{ asset("/$direction/js/waves.js") }}"></script>
<script src="{{ asset("/$direction/js/jquery.nicescroll.js") }}"></script>
<script src="{{ asset("/$direction/js/jquery.slimscroll.js") }}"></script>
<script src="{{ asset("/$direction/js/jquery.scrollTo.min.js") }}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{ asset("/$direction/plugins/jquery-knob/excanvas.js") }}"></script>
<![endif]-->
<script src="{{ asset("/$direction/plugins/jquery-knob/jquery.knob.js") }}"></script>



<!-- Dashboard init -->
<script src="{{ asset("/$direction/pages/jquery.dashboard.js") }}"></script>
@yield('footer')
<!-- App js -->
<script src="{{ asset("/$direction/js/jquery.core.js") }}"></script>
<script src="{{ asset("/$direction/js/jquery.app.js") }}"></script>
@yield('script')
</body>
</html>
