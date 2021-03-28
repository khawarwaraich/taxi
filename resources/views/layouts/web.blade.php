<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'The Quickest Delivery') }}</title>

        <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/bootstrap-select.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/color.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/custom-responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/component.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/slide-component.css') }}" rel="stylesheet">
		<link href="{{ asset('front/css/default.css') }}" rel="stylesheet">
        	<!-- font awesome this template -->
		<link href="{{ asset('front/fonts/css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('front/fonts/css/font-awesome.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front_v2/assets/css/responsive.css') }}">




        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDonC-1G2p3mTe58eYXqSO3-4MIx5Zj3pM"></script>
        <style>
            #map-canvas {
    height: 65% !important;
            }
            .bg-taxi{
               height: auto;
            }
        </style>
    </head>
    <body>
        <div id="preloader">
			<div class="preloader-container">
				<img src="{{ asset('front') }}/images/preloader.gif" class="preload-gif" alt="preload-image">
			</div>
		</div>

            @include('layouts.headers.header')

            @yield('content')

            @include('layouts.footers.footer')

            {{-- <script src="{{ asset('front/js/jquery.js') }}"></script> --}}
            <script src="{{ asset('front/js/menu/jquery.min.js') }}"></script>
            <script src="{{ asset('front/js/menu/modernizr.custom.js') }}"></script>
            <script src="{{ asset('front/js/menu/jquery.dlmenu.js') }}"></script>
            <script src="{{ asset('front/js/bg-slider/modernizr.custom.js') }}"></script>
            <script src="{{ asset('front/js/bg-slider/jquery.imagesloaded.min.js') }}"></script>
            <script src="{{ asset('front/js/bg-slider/cbpBGSlideshow.min.js') }}"></script>
            <script src="{{ asset('front/js/uikit.js') }}" type="text/javascript"></script>
            <script src="{{ asset('front/js/jquery.stellar.js') }}"></script>
            <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('front/js/g-map/map.js') }}" type="text/javascript"></script>
            <script src="{{ asset('front/js/bootstrap-select.js') }}"></script>
            <script src="{{ asset('front/js/jquery-ui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('front/js/custom.js') }}" type="text/javascript"></script>
            <script src="{{ asset('front/js/custom2.js') }}" type="text/javascript"></script>
            <script src="{{ asset('front/js/menu/custom-menu.js') }}"></script>
            <script src="{{ asset('front/scripts/google-scripts.js') }}"></script>
            <script src="{{ asset('front_v2/assets/js/main.js') }}"></script>

            <script defer>
                $(".book-now").on("click", function(){
                    booking_arr = localStorage.getItem('booking_arr');
                    if(booking_arr != null)
                    {
                        localStorage.clear();
                    }
                    var cat_id = $(this).attr('data-catID');
                    var customer_id = $(this).attr('data-userID');
                    var order_amount = $(this).attr('data-fare');

                    var start = document.getElementById('from').value;
                    var end = document.getElementById('to').value;

                    var booking_arr = [{
                        'category_id' : cat_id,
                        'customer_id' : customer_id,
                        'start' : start,
                        'end' : end,
                        'order_amount' : parseFloat(order_amount).toFixed(2)
                    }];
                    localStorage.setItem("booking_arr", JSON.stringify(booking_arr));
                    window.location.href = "<?php BASE_URL; ?>/checkout?token="+cat_id;
                    // $.ajax({
                    //     url: "/checkout",
                    //     type:"post",
                    //     method:"post",
                    //     data:{
                    //     cat_id:cat_id,
                    //     customer_id:customer_id,
                    //     order_amount:order_amount,
                    //     start:start,
                    //     end:end,
                    //     _token: '{{ csrf_token() }}'
                    //     },
                    //     success:function(response){
                    //     console.log(response);
                    //     },
                    // });
                });
                </script>

    </body>
</html>
