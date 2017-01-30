@extends('layouts.default')

@section('title')
Notícias - Só os Lagados
@endsection

@section('imports-css')
	<link rel="stylesheet" type="text/css" href="css/news.css">
@endsection

@section('header')
<div class="jumbotron">
	<div class="container">
		<h1>Noticias</h1>
	</div>
</div>
@endsection
    
@section('content')
<div class="container">
	<div class="row col-md-10">
		<div class="news-image col-md-4">
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>

		<div class="news-content col-md-8">
			<h3 class="news-title">Hatshepsut fala sobre o meta atual.</h3>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
			<p><a href="#">Leia mais...</a></p>
		</div>
		<br>
		<div class="news-image col-md-4">
			<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
		</div>

		<div class="news-content col-md-8">
			<h3 class="news-title">Hatshepsut fala sobre o meta atual.</h3>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
			<p><a href="#">Leia mais...</a></p>
		</div>		
	</div>


	<div class="row col-md-2 sidebar-news">	
		<h4>Destaques</h4>
		<ul>
			<li>Hearthstone</li>
		</ul>
	</div>	
</div>

@endsection
