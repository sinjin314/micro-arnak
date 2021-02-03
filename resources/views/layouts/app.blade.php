<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MicroArnak') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--  Half moon needed assets  --}}
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>

    <script src="https://kit.fontawesome.com/24de196d7b.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="page-wrapper with-navbar with-sidebar">
    <nav class="navbar">
        <div class="navbar-content">

            <!-- Toggle sidebar -->
            @if(auth()->user())
            <button class="btn" type="button" onclick="halfmoon.toggleSidebar()">Toggle sidebar</button>
            @endif
        </div>
        <!-- Navbar brand -->
        <a href="{{ route('games.index') }}" class="navbar-brand">
            <img src="https://www.gethalfmoon.com/static/site/img/fake-logo.svg" alt="...">
            Micro-Arnak
        </a>

        <div class="navbar-content ml-auto">
            <form class="form-inline d-none d-md-flex ml-auto" method="GET"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
                <input type="text" class="form-control" placeholder="Search" name="search">
                <button class="btn btn-success mr-5" type="submit">Search</button>
            </form>


            @if(auth()->user())
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a class="btn btn-danger mr-5" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    logout
                </a>
                <a href="{{ route("cart.index") }}" class="btn btn-success mr-5" >Cart</a>
                <button class="btn mr-5" type="button" onclick="halfmoon.toggleDarkMode()"><i class="fa fa-moon-o" aria-hidden="true"></i></button>

            @else
                <a href="{{ route("login") }}" class="btn btn-primary mr-5">login</a>

                <a href="{{ route("register") }}" class="btn btn-secondary mr-5">register</a>
            @endif

        </div>
    </nav>
    @if(auth()->user())
        <div class="sidebar">
            <div class="sidebar-menu">
                <!-- Sidebar content with the search box -->
                <div class="sidebar-content">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="mt-10 font-size-12"> <!-- mt-10 = margin-top: 1rem (10px), font-size-12 = font-size: 1.2rem (12px) -->
                        <button class="btn btn-success mr-5" type="submit">search</button>
                    </div>

                </div>
                <!-- Sidebar links and titles -->
                @if( auth()->user()->is_admin == 1 )
                    <a href="{{url('/admin/')}}" class="sidebar-link" > admin pannel </a>
                    <br />
                @endif
                <h5 class="sidebar-title">Welcome back, {{ Auth::user()->name }} !</h5>
                <div class="sidebar-divider"></div>
                <a href="{{ route('games.index') }}" class="sidebar-link active">Home</a>
                <a href="{{ route('cart.index') }}" class="sidebar-link">Your cart</a>
                <a href="{{ route('home') }}" class="sidebar-link">Your account</a>
                <br />
                <h5 class="sidebar-title">MicroArnak</h5>
                <div class="sidebar-divider"></div>
                <a href="{{ route('games.index') }}" class="sidebar-link">Our games</a>
                <a href="#" class="sidebar-link">About us</a>
                <a href="#" class="sidebar-link">Contact support</a>

            </div>
        </div>
        @endif
    <div class="content-wrapper">
    @yield('content')
    </div>
</div>
        <script type="text/javascript">
            // Dark mode toggle demo
            function darkMode() {
                halfmoon.toggleDarkMode();
            }
        </script>





</body>
</html>
