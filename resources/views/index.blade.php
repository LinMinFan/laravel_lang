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
          .ImagesBox{
            width: 250px;
            height: 250px;
            overflow: hidden;
          }
          .ImagesAni{
            transition: 0.5s;
          }
          .ImagesBox:hover .ImagesAni{
            transform: scale(1.5)
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
              <li class="nav-item">
                <a class="nav-link" href="#section3">{{trans('index.img')}}</a>
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
        {{-- Pages --}}
      <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <h1>
              @foreach ($pages as $page)
                  @if ($page->type==$languge_array[$local])
                  <h3 class="ct">{{$page->content}}</h3>
                  @endif
              @endforeach
            </h1>
            
          </div>
          {{-- Pages End --}}

          {{-- Counter --}}
          <div id="section2" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link navCtp" data-toggle="pill" href="#home">全部案例</a>
              </li>
              @foreach ($cou_type as $key => $cTp)
              <li class="nav-item">
                <a class="nav-link navCtp" data-toggle="pill" href="#menu{{$key}}">{{$cTp->name}}</a>
              </li>  
              @endforeach
             
            </ul>
          <br>
            <!-- Tab panes -->
            <div class="tab-content">
              <div id="home" class="container tab-pane"><br>
                <div class="container d-flex flex-wrap justify-content-between">
                @foreach ($counters as $all)
                    @if ($all->len==$languge_array[$local])
                    <div class="card col-3" >
                      <img class="card-img-top" src="./uploads/{{$all->img}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">{{$all->name}}</h4>
                        <p class="card-text">{{mb_substr($all->text,0,40)}}...</p>
                        <a href="/laravel_lang/public/counters/{{$all->id}}/{{$local}}" class="btn btn-primary stretched-link">Detail</a>
                      </div>
                    </div> 
                    @endif
                @endforeach
              </div>
              </div>
              @foreach ($cou_type as $key => $cTp)
              <div id="menu{{$key}}" class="container tab-pane"><br>
                <div class="container d-flex flex-wrap justify-content-between">
                  @foreach ($counters as $conTp)
                  @if ($conTp->len==$languge_array[$local] && $conTp->type==$cTp->id)
                  <div class="card col-3" >
                    <img class="card-img-top" src="./uploads/{{$conTp->img}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title">{{$conTp->name}}</h4>
                      <p class="card-text">{{mb_substr($conTp->text,0,40)}}...</p>
                      <a href="/laravel_lang/public/counters/{{$conTp->id}}/{{$local}}" class="btn btn-primary stretched-link">Detail</a>
                    </div>
                  </div> 
                  @endif
              @endforeach
              </div>
              </div>
              @endforeach
              </div>
            </div>
            {{-- Counter End --}}

            {{-- images --}}
            <div id="section3" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
            <div class="container d-flex flex-wrap justify-content-between">
              @foreach ($imgs as $img)
              <div class="col-4">
              <h2>{{$img->name}}</h2>
              <p>{{mb_substr($img->text,0,50)}}...</p>
              <div class="ImagesBox">
              <img src="./uploads/{{$img->img}}" class="rounded ImagesAni" alt="Cinque Terre" width="250" height="250">
              </div>
            </div>
              @endforeach
            </div>   
          </div>
            {{-- images End --}}
          </div>
          {{-- Section End--}}
      <script>
        $('.navCtp').eq(0).addClass('active');
        $('.tab-pane').eq(0).addClass('active');
      </script>
    </body>
</html>
