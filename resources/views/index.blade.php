<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>網站首頁</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="/laravel_lang/public/css/style.css">

    </head>
    <body class="">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top d-flex flex-row-reverse">  
            <ul class="navbar-nav mr-5">
              <li class="nav-item">
                <a class="nav-link" href="#section1">Section 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section2">Section 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section3">Section 3</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Section 4
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#section41">Link 1</a>
                  <a class="dropdown-item" href="#section42">Link 2</a>
                </div>
              </li>
            </ul>
          </nav>
          
          <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>Section 1</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          </div>
          <div id="section2" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>Section 2</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          </div>
          <div id="section3" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>Section 3</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          </div>
          <div id="section41" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>Section 4 Submenu 1</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          </div>
          <div id="section42" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>Section 4 Submenu 2</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
          </div>
    </body>
</html>
