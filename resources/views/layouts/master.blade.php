<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Laboratorium</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend') }}/images/favicon.png" />

    <link href="{{ asset('frontend') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
        Header start
        ***********************************-->
        @include('layouts.header')
        <!--**********************************
        Header End
        ***********************************-->

        <!--**********************************
        Sidebar start
        ***********************************-->
        @include('layouts.sidebar')
        <!--**********************************
        Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('frontend') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('frontend') }}/vendor/apexchart/apexchart.js"></script>
    <script src="{{ asset('frontend') }}/vendor/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/wnumb/wNumb.js"></script>
    <script src="{{ asset('frontend') }}/vendor/highlightjs/highlight.pack.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('frontend') }}/js/dashboard/dashboard-1.js"></script>

    <script src="{{ asset('frontend') }}/js/custom.min.js"></script>
    <script src="{{ asset('frontend') }}/js/dlabnav-init.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/my-wallet.js"></script>

</body>

</html>
