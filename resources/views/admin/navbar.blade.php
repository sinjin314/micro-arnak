<nav class="navbar">


    <div class="navbar-content">


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

            <a href="{{ route("register") }}" class="btn btn-secondary mr-5">register</a>
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
