@if(Auth::guard('admin')->check())
    @include('layouts.navbars.navs.auth')
@endif

@guest()
    @include('layouts.navbars.navs.guest')
@endguest
