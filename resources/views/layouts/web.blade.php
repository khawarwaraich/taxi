<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'The Quickest Delivery') }}</title>

        <link href="{{ asset('public/front/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/bootstrap-select.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/color.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/custom-responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/component.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/slide-component.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/css/default.css') }}" rel="stylesheet">
		<!-- font awesome this template -->
		<link href="{{ asset('public/front/fonts/css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('public/front/fonts/css/font-awesome.min.css') }}" rel="stylesheet">


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyAKwIV-6y31LwzBieBhJqAztrZL9C76T7Y"></script>

    </head>
    <body>
        <div id="preloader">
			<div class="preloader-container">
				<img src="{{ asset('front') }}/images/preloader.gif" class="preload-gif" alt="preload-image">
			</div>
		</div>

            @include('layouts.headers.webheader')

            @yield('content')

            @include('layouts.footers.webfooter')

            <script src="{{ asset('public/front/js/jquery.js') }}"></script>
            <script src="{{ asset('public/front/js/menu/jquery.min.js') }}"></script>
            <script src="{{ asset('public/front/js/menu/modernizr.custom.js') }}"></script>
            <script src="{{ asset('public//js/menu/jquery.dlmenu.js') }}"></script>
            <script src="{{ asset('public/front/js/bg-slider/modernizr.custom.js') }}"></script>
            <script src="{{ asset('public/front/js/bg-slider/jquery.imagesloaded.min.js') }}"></script>
            <script src="{{ asset('public/front/js/bg-slider/cbpBGSlideshow.min.js') }}"></script>
            <script src="{{ asset('public/front/js/uikit.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/front/js/jquery.stellar.js') }}"></script>
            <script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('public/front/js/bootstrap-select.js') }}"></script>
            <script src="{{ asset('public/front/js/jquery-ui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/front/js/custom.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/front/js/custom2.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/front/js/menu/custom-menu.js') }}"></script>
            <script src="{{ asset('public/front/js/google-scripts.js') }}"></script>
    </body>
</html>
