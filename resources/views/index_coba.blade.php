@extends('layout.base')
@section('title',' Home | Migunani ')

@section('nav')
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <a class="nav-link " href="/admin">ADMIN <span class="sr-only">(current)</span></a>
            </li>
        @endif
        <li class="nav-item" >
            <a class="nav-link active " href="/">HOME</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link "  href="/galery">GALLERY</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/about">ABOUT</a>
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
      <img src="{{asset('image/interior.jpg') }}" class="d-block banner" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/interior3.jpg') }}" class="d-block banner" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/modern.jpg') }}" class="d-block banner" alt="...">
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
<!-- <div id="our" class="bg-cover bg-top" style="background-image:url('img/balloon.jpg');">
	<div class="overlay-light">
		<div class="row mr0 ml0">
			<div class="col-md-8 col-md-offset-2">
				<div class="pt150 pb150 f17 text-center">
					<h2 class="f50 mb25 text-red mt0">
						Why choose us?
					</h2>
					<div class="hashtag f25 mb40">
						<div class="hashtag-item">
							Lorem ipsum dolor
						</div>
					</div>
					<p class="f17 mb40">
						Lorem ipsum dolor sit amet, per id delicata philosophia, ei mea modus torquatos. Cu duo amet lorem impedit. Solet nominavi an vis, nusquam splendide mel ei. Ei per animal repudiandae, mel accumsan vituperatoribus no. Est magna oblique te, eum iusto bonorum vivendum ei. An vix mutat aliquando dissentias.
					</p>
					<a class="btn btn-primary btn-large m15" href="#">
						Our review
					</a>
					<a class="btn btn-primary btn-large m15" href="#">
						Our guide
					</a>
				</div>
			</div>
		</div>
	</div>
</div> -->


@endsection

@section('container')
<div class="container-fluid my-5">
    <div class="container bg-white text-dark text-center shadow" id="mybody">   
        <div class="row" >
               <div class="col-sm-12 text-center">
                <h1 >content</h1>
                <hr>
            </div>
        </div>
        <div class="row" id="satu">
            <div class="col-sm-12 ">
                <p>danu ipsum dolor sit amet consectetur adipisicing elit. Fugiat nemo earum repellat velit sint laboriosam dolor in illum maxime cumque iusto accusamus id, fuga voluptatum. Eaque non qui necessitatibus doloremque.</p>
            </div>
        </div>
    </div>
    <div class="container bg-dark text-white text-center shadow" >
        <div class="row" >
            <div class="col-sm-12 text-center">
                <h1>content</h1>
                <hr>
            </div>
        </div>
        <div class="row" id="satu">
            <div class="col-sm-12 ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nemo earum repellat velit sint laboriosam dolor in illum maxime cumque iusto accusamus id, fuga voluptatum. Eaque non qui necessitatibus doloremque.</p>
            </div>
        </div>
    </div>    
</div>
@endsection






