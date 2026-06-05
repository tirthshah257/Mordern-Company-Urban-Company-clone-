<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>Palette - Free Bootstrap 5 Agency Template</title>
  <meta name="description" content="Palette is a Free Bootstrap 5 Agency Template.">
  <meta name="author" content="BootstrapBrain">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href=".././User_assets/favicon/favicon-512x512.png">

  <!-- Google Fonts Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="../../User_assets/css/palette-bsb.css">
  @stack('User-scripts')


  <!-- BSB Head -->
</head>

<body>
  <!-- Header -->
  <header id="header">

    <!-- Navbar 1 - Bootstrap Brain Component -->
    <nav class="navbar navbar-expand-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret bsb-tpl-navbar-float bsb-tpl-navbar-sticky" data-bs-theme="dark" data-bsb-stuck-bg="bg-primary" data-bsb-stuck-theme="dark">
      <div class="container">

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="bsb-tpl-navbar" class="navbar-nav justify-content-end flex-grow-1">
              @if(session()->get('user_type') == 'Service Provider' && session()->has('user_id'))
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/addServices">Add Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/AcceptServices">Customers</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              </li>
              @if(session()->has('user_id'))
              <li class="nav-item">
                <a class="nav-link" href="/myBookings">My Booking</a>
              </li>
              @endif
              <li class="nav-item dropdown" data-bs-theme="light">
                <a class="nav-link dropdown-toggle" href="/loginButton" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="blogDropdown">
                  <li><a class="dropdown-item " href="/loginButton">Login</a></li>
                  <li><a class="dropdown-item " href="/RegisterUser">Register</a></li>
                  <li><a class="dropdown-item" href="/logoutButton">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    @stack('header-part')
  </header>

  <main>
    @yield('User-main')
  </main>