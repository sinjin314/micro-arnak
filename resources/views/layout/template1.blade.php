<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />


    <title>Microarnak</title>
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars dark-mode" data-sidebar-shortcut-enabled="true" data-dm-shortcut-enabled="true">
<div class="page-wrapper with-navbar">
    <!-- Navbar (immediate child of the page wrapper) -->
    <nav class="navbar">
        <!-- Navbar content (with toggle sidebar button) -->
        <div class="navbar-content">
            <button class="btn btn-action" type="button">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="sr-only">Toggle sidebar</span> <!-- sr-only = show only on screen readers -->
            </button>
        </div>
        <!-- Navbar brand -->
        <a href="#" class="navbar-brand">
            <img src="assets/images/logo.png" alt="logo">

        </a>
        <!-- Navbar text -->
        <span class="navbar-text text-monospace">v3.0</span> <!-- text-monospace = font-family shifted to monospace -->
        <!-- Navbar nav -->
        <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
            <li class="nav-item active">
                <a href="#" class="nav-link">Docs</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Products</a>
            </li>
        </ul>
        <!-- Navbar form (inline form) -->
        <form class="form-inline d-none d-md-flex ml-auto" action="..." method="..."> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
            <input type="text" class="form-control" placeholder="Email address" required="required">
            <button class="btn btn-primary" type="submit">Sign up</button>
        </form>
        <!-- Navbar content (with the dropdown menu) -->
        <div class="navbar-content d-md-none ml-auto"> <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
            <div class="dropdown with-arrow">
                <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
                    Menu
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1"> <!-- w-200 = width: 20rem (200px) -->
                    <a href="#" class="dropdown-item">Docs</a>
                    <a href="#" class="dropdown-item">Products</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-content">
                        <form action="..." method="...">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email address" required="required">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        ...
    </div>
</div>
   <br>
   <br>
   <br>
    <div class="container">
        @section('content')

        @show
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</div>
</body>
</html>
