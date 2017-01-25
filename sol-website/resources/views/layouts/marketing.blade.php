<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/app.css">

  @yield('imports-css')

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  @yield('imports-js')

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Patrocinadores</a></li>
        <li><a href="#">Contato</a></li>
      </ul>

    </div>
  </div>
</nav>

@yield('header')

@yield('content') 

@yield('footer')

</body>
</html>
