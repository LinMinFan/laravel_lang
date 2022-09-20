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
        <style>
          /* Make the image fully responsive */
          .carousel-inner img {
            width: 100%;
          }
          </style>
    </head>
    <body class="">
      {{-- NavBar --}}
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top d-flex flex-row-reverse">  
            <ul class="navbar-nav mr-5">
              <li class="nav-item">
                <a class="nav-link" href="#section1">{{trans('index.about')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section2">{{trans('index.counter')}}</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  {{trans('index.language')}}
                </a>
                <div class="dropdown-menu">
                  @foreach ($lan as $language)
                      @if ($language->sh==1)
                      <a class="dropdown-item" href="/laravel_lang/public/{{$language->len}}">{{$language->name}}</a>
                      @endif
                  @endforeach
                </div>
              </li>
            </ul>
          </nav>
      {{-- NavBar End--}}
          <br>
          <br>
      {{-- Carousel --}}
      <div class="container mt-5">
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/10/1100/500" alt="" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/1000/1100/500" alt="" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/1004/1100/500" alt="" width="1100" height="500">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
      {{-- Carousel End--}}

      

      {{-- Section --}}
      <div class="container">
      <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>
              @foreach ($pages as $page)
                  @if ($page->type==$languge_array[$local])
                  <h3 class="ct">{{$page->content}}</h3>
                  @endif
              @endforeach
            </h1>
            
          </div>
          <div id="section2" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            
          </div>
        </div>
      {{-- Section End--}}

      
    </body>
</html>
