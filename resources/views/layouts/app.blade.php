<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RMS') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon/css/argon.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon/css/select.bootstrap4.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon/css/dropify.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('argon/css/select2.min.css') }}" rel="stylesheet">
        <script src="{{ asset('argon/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('argon/js/dropify.js') }}"></script>

        <!-- Argon JS -->
        <script src="{{ asset('argon/jsargon.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key="></script>

    </head>
    <body class="{{ $class ?? '' }}">
        @if(Auth::guard('admin')->check())
              @include('layouts.navbars.sidebar')
        @endif

        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @if(!Auth::guard('admin')->check())
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables JS -->
        <script src="{{ asset('argon/vendor/dataTables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/dataTables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('argon/vendor/dataTables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('argon/js/select2.min.js') }}"></script>
        @stack('js')
    </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  $('#datatable-buttons').DataTable();
});

$('#datatable-buttons').dataTable( {
  "language": {
    "paginate": {
      "previous": "<",
      "next": ">"
    }
  },
  "order": []
});
</script>
<script>
    $('.dropify').dropify();
</script>
