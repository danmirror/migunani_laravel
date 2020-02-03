@extends('layout.base')
@section('title',' Home | Migunani ')

@section('nav')
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo1.png') }}"    class="nav" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
            @if (Session('login'))
            <li class="nav-item" >
                <a class="nav-link " href="/admin">Admin <span class="sr-only">(current)</span></a>
            </li>
        @endif
        <li class="nav-item" >
            <a class="nav-link active " href="/">Home</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link "  href="/galery">Gallery</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/about">About</a>
        </li>
        </ul>
      </div>
    </nav>
@endsection

@section('jumbotron')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/3.png') }}" class="d-block banner" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/4.png') }}" class="d-block banner" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/5.png') }}" class="d-block banner" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



@endsection

@section('container')
<div class="container-fluid my-5">
    <div class="container bg-white text-dark text-center ">   
        <div class="row" >
               <div class="col-sm-12 text-center">
                <h1 >Migunani Architect</h1>
                <hr style="width:60%; border: 1px solid ;">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-12 ">
                <p>Migunani architect adalah jasa di bidang bangunan baik hunian maupun bangunan komersil. 
            Kami melayani jasa di bidang desain dan pelasanaan, interior, eksterior dan landscape. 
            Kami berkomitmen untuk selalu memberikan yang terbaik bagi semua pelanggan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 ">
            <img src="{{ asset('image/f.png') }}" class="content_img">
            <h6>Desain Interior</h6>
               
            </div>
            <div class="col-4 ">
            <img src="{{ asset('image/b.png') }}" class="content_img">
            <h6>Desain Eksterior</h6>
                
            </div>
            <div class="col-4 ">
            <img src="{{ asset('image/a.png') }}" class="content_img">
            <h6>Desain Komersial</h6>
                  
            </div>
        </div>
    </div>
</div>
@endsection






