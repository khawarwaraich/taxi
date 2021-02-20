<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand admin-logo pt-0" href="{{ route('admin:home') }}">
            <img src="" class="navbar-brand-img" alt="...">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin:home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin:home') }}">
                        <i class="ni ni-active-40 text-success"></i> {{ __('Live Booking Orders') }}
                        <div class="blob red"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin:categories') }}">
                        <i class="ni ni-shop text-orange"></i> {{ __('Categories') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin:users')}}">
                        <i class="ni ni-circle-08 text-orange"></i> {{ __('Customers') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin:settings')}}">
                        <i class="ni ni-settings text-success"></i> {{ __('Settings & Features') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
