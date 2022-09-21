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
      <div class="container d-flex justify-content-center mt-5">
        <div class="card img-fluid p-3" style="width:400px">
          <img src="/laravel_lang/public/uploads/{{$counter->img}}" class="card-img-top img-thumbnail" alt="Cinque Terre" width="200" height="200"> 
          <div class="card-img-overlay">
            <h3 class="card-title">{{$counter->name}}</h3>
            <h5 class="card-text">{{$counter->text}}</h5>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <a href="/laravel_lang/public/{{$local}}" class="btn btn-info" role="button">Home</a>
      </div>
    </body>
</html>
