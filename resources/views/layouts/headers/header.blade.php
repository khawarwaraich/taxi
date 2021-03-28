     <!-- offcanvas-menu -->
     <div class="offcanvas-wrapper">
        <span class="cross"><i class="fal fa-times"></i></span>

        <div class="off-cnavas-menu">
            <ul>
                <li><a href="{{ BASE_URL }}">Home</a></li>
                <li><a href="#how_works_area">How it works</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-menu-end -->

        <!-- header_area  -->
        <header>
            <div class="header_area">
                <div class="container">
                    <div class="meader_wrapper d-flex justify-content-between align-items-center">
                        @php
                        $name = "logo.jpg";
                        $path = BASE_URL.LARGE_IMAGE_PATH_OUTLET.$name;
                        $check_exist = File::exists(public_path().LARGE_IMAGE_PATH_OUTLET.$name);
                        if($check_exist == 1 && $name != '')
                        {
                          $image = $path;
                        }else{
                          $image = NO_IMAGE;
                        }
                        @endphp
                        <div class="logo_area">
                            <a href=""><img src="{{$image}}" height="44px;" alt=""></a>
                        </div>

                        <div class="header_right d-flex align-items-center">
                            <div class="main_menu">
                                <ul class="d-flex">
                                    <li><a href="{{ BASE_URL }}">Home</a></li>
                                    <li><a href="#how_works_area">How it works</a></li>
                                    <li><a href="#services">Services</a></li>
                                </ul>
                            </div>
                            <div class="mobo_menu d-lg-none"><span class="bar"><i class="fal fa-bars"></i></span></div>
                            @guest
                            <div class="header_right_btn">
                                <a href="{{route('login')}}" class="btn">LOGIN</a>
                            </div>
                            @endguest
                            @if(auth()->guard('web')->check())
                            <div class="header_right_btn">
                                <a href="{{route('logout')}}" class="btn">LOGOUT</a>
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </header>
