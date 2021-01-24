<nav class="navbar">
    <!-- Navbar content (with toggle sidebar button) -->
{{--    <div class="navbar-content">--}}
{{--        <button class="btn btn-action" type="button">--}}
{{--            <i class="fa fa-bars" aria-hidden="true"></i>--}}
{{--            <span class="sr-only">Toggle sidebar</span> <!-- sr-only = show only on screen readers -->--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <!-- Navbar brand -->--}}
{{--    <a href="#" class="navbar-brand">--}}
{{--        <img src="https://www.gethalfmoon.com/static/site/img/fake-logo.svg" alt="...">--}}
{{--        Micro-Arnak--}}
{{--    </a>--}}
{{--    <!-- Navbar nav -->--}}
{{--    <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->--}}
{{--        <li class="nav-item active">--}}
{{--            <a href="#" class="nav-link">Docs</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">search</a>--}}
{{--        </li>--}}

{{--        <button class="btn btn-primary" type="button" onclick="darkMode()">Click me!</button>--}}
{{--    </ul>--}}
{{--    <!-- Navbar form (inline form) -->--}}
{{--    <form class="form-inline d-none d-md-flex ml-auto" action="..." method="..."> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px), ml-auto = margin-left: auto -->--}}
{{--        <input type="text" class="form-control" placeholder="Email address" required="required">--}}
{{--        <button class="btn btn-primary" type="submit">Sign up</button>--}}

{{--    </form>--}}
    <!-- Navbar content (with the dropdown menu) -->
{{--    <div class="navbar-content d-md-none ml-auto"> <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->--}}
{{--            <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">--}}
{{--                Menu--}}
{{--                <i class="fa fa-angle-down" ></i>--}}
{{--            </button>--}}


{{--            <form action="{{ route('logout') }}" method="POST">--}}
{{--                <button class="btn btn-danger btn-block" type="submit">Log Out</button>--}}
{{--                @csrf--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <ul class="navbar-nav d-none d-md-flex ml-auto mr-lg-auto"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->--}}
{{--        <li class="nav-item active">--}}
{{--            <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">--}}
{{--                Menu--}}
{{--                <i class="fa fa-angle-down" aria-hidden="true"></i>--}}
{{--            </button>--}}
{{--        </li>--}}
{{--    </ul>--}}

    <div class="navbar-content">
{{--        <button class="btn btn-action" type="button">--}}
{{--            <i class="fa fa-bars" aria-hidden="true"></i>--}}
{{--            <span class="sr-only">Toggle sidebar</span> <!-- sr-only = show only on screen readers -->--}}
{{--        </button>--}}

        <!-- Toggle sidebar -->
        <button class="btn" type="button" onclick="halfmoon.toggleSidebar()">Toggle sidebar</button>
    </div>
    <!-- Navbar brand -->
    <a href="#" class="navbar-brand">
        <img src="https://www.gethalfmoon.com/static/site/img/fake-logo.svg" alt="...">
        Micro-Arnak
    </a>

    <div class="navbar-content ml-auto">
        <form class="form-inline d-none d-md-flex ml-auto" method="GET"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-success mr-5" type="submit">search</button>
        </form>


        @if(auth()->user())
            <a class="btn btn-danger mr-5" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{ route("login") }}" class="btn btn-primary mr-5">login</a>

            <a href="{{ route("register") }}" class="btn btn-secondary mr-5">register</i></a>
        @endif

        <button class="btn mr-5" type="button" onclick="halfmoon.toggleDarkMode()">darkmode</button>
    </div>
</nav>

<script type="text/javascript">
    // Dark mode toggle demo
    function darkMode() {
        halfmoon.toggleDarkMode();
    }
</script>
