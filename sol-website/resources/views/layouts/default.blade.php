<!DOCTYPE html>
<html lang="pt_br">
<head>
  <title>@yield('title')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  @yield('imports-js')

  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
  @yield('imports-css')
  
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
					<li><a href="#">Inicio</a></li>
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
