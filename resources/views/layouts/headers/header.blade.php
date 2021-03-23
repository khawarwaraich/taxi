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

                        <div class="logo_area">
                            <a href=""><img src="assets/img/logo.svg" alt=""></a>
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
                            <div class="header_right_btn">
                                <a href="{{route('login')}}" class="btn">LOGIN</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
