<div class="map-wapper-opacity">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-sm-4">
                    <div class="call-us call-us2">
                        <span class="img-circle img-circle01"><i class="fa fa-phone"></i></span>
                        <p>Call Us Now at (88) 4586 2589</p>
                    </div>
                </div>
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
                <div class="col-sm-3">
                    <div class="logo-wraper">
                        <div class="logo">
                            <a href="{{route('/')}}">
                                <img src="{{ $image }}" style="height: 68px;width: 208px;" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="languages" class="resister-social">
                        @guest
                        <div class="login-register login">
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register.customer') }}">Register</a>
                        </div>
                        @endguest
                        @if(auth()->guard('web')->check())
                        <div class="login-register login">
                            <a href="{{ route('logout') }}">Logout</a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="header-menu-wrap">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="main  collapse navbar-collapse">
                                <div class="column">
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <a href="#" class="dl-trigger" data-toggle="dropdown"><i class="fa fa-align-justify"></i></a>
                                        <ul class="dl-menu">
                                            <li>
                                                <a href="{{ route('/') }}"> Home</a>
                                            </li>
                                            <li>
                                                <a href="#">Categories</a>
                                            </li>
                                            <li>
                                                <a href="#">Our Services</a>
                                            </li>
                                            <li>
                                                <a href="#">About Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
