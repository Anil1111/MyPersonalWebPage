@extends('layouts.default')

@section('imports-css')

<link rel="stylesheet" type="text/css" href="css/marketing.css">

@section('header')
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
  

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">

        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">

        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>

      </div>

      <div class="item">

        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">

        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      

      </div>
    </div>

    <!-- Left and right controls -->
    <!--
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    -->
</div>
@endsection

@section('content')
<div class="container">    
  <h3>Destaques</h3><br>

  <div class="row">
    <div class="col-sm-5">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-7">
      <h3>Hatshepsut fala sobre o meta atual.</h3>
      <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
    </div>
  </div>
</div>
@endsection
<br>
@section('footer')
<br>
<footer class="container-fluid text-center">
  <p>Só os Lagados - Copyright 2017</p>
</footer>
@endsection