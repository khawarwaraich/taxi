<!DOCTYPE html>
<html lang="en">
	<head>

			<title>Taksi</title>
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no">

            <link href="{{ asset('public/front') }}/css/bootstrap.css" rel="stylesheet">
            <link href="{{ asset('public/') }}/css/bootstrap-select.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/style.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/color.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/custom-responsive.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/animate.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/component.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/slide-component.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/css/default.css" rel="stylesheet">
            <!-- font awesome this template -->
            <link href="{{ asset('public/front') }}/fonts/css/font-awesome.css" rel="stylesheet">
            <link href="{{ asset('public/front') }}/fonts/css/font-awesome.min.css" rel="stylesheet">


	</head>
	<body>

        @include('front.front-layouts.loader')

        <div class="map-wapper-opacity">
            @include('front.front-layouts.header')
            @yield('content')
        </div>

            {{-- @include('front.front-layouts.footer') --}}


            <script src="{{ asset('public/front') }}/js/jquery.js"></script>
            <script src="{{ asset('public/front') }}/js/menu/jquery.min.js"></script>
            <script src="{{ asset('public/front') }}/js/menu/modernizr.custom.js"></script>
            <script src="{{ asset('public/front') }}/js/menu/jquery.dlmenu.js"></script>
            <script src="{{ asset('public/front') }}/js/bg-slider/modernizr.custom.js"></script>
            <script src="{{ asset('public/front') }}/js/bg-slider/jquery.imagesloaded.min.js"></script>
            <script src="{{ asset('public/front') }}/js/bg-slider/cbpBGSlideshow.min.js"></script>
            <script src="{{ asset('public/front') }}/js/uikit.js" type="text/javascript"></script>
            <script src="{{ asset('public/front') }}/js/jquery.stellar.js"></script>
            <script src="{{ asset('public/front') }}/js/bootstrap.min.js"></script>
            <script src="{{ asset('public/front') }}/js/bootstrap-select.js"></script>
            <script src="{{ asset('public/front') }}/js/jquery-ui.min.js" type="text/javascript"></script>
            <script src="{{ asset('public/front') }}/js/custom.js" type="text/javascript"></script>
            <script src="{{ asset('public/front') }}/js/custom2.js" type="text/javascript"></script>
            <script src="{{ asset('public/front') }}/js/menu/custom-menu.js"></script>

    </body>
</html>
