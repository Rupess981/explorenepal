<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('adminAssets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">



    <!-- CSS -->
    <link href="{{ asset('adminAssets/css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ asset('adminAssets/css/app.min.2.css') }}" rel="stylesheet">

</head>
<body>


@include('layouts.admin.header')


<section id="main">

    @include('layouts.admin.sidebar')


    <section id="content">
        <div class="container">
            @yield('content')

        </div>
    </section>
</section>


@include('layouts.admin.footer')

<!-- Older IE warning message -->
<!--[if lt IE 9]>
<!--<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>-->

<!-- Javascript Libraries -->
<script src="{{ asset('adminAssets/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('adminAssets/vendors/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/sparklines/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

<script src="{{ asset('adminAssets/vendors/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js') }}"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="{{ asset('adminAssets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
<![endif]-->

<script src="{{ asset('adminAssets/js/flot-charts/curved-line-chart.js') }}"></script>
<script src="{{ asset('adminAssets/js/flot-charts/line-chart.js') }}"></script>
<script src="{{ asset('adminAssets/js/charts.js') }}"></script>

<script src="{{ asset('adminAssets/js/charts.js') }}"></script>
<script src="{{ asset('adminAssets/js/functions.js') }}"></script>
<script src="{{ asset('adminAssets/js/demo.js') }}"></script>


</body>
</html>