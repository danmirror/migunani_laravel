@extends('layout.base')

@section('title','ini galery')
@section('link')
<link rel="stylesheet" href="{{ asset('css/style-galeri.css') }}" >
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
@endsection

@section('nav')
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo1.png') }}"   class="nav" alt="">
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
            <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active"  href="/galery">gallery</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/register/create">about</a>
        </li>
        </ul>
    </div>
</nav>
@endsection

@section('container')

<div class="container pt-3">
	<div class="row">
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="0">
				<img src="{{ asset('data_file/1573315364_ed953989-ba21-43e4-85b5-ecb080feb155.jpg') }}">
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="1">
				<video>
					<source src="{{ asset('data_file/1573462144_ghdt.mp4') }}" type="video/mp4">
				</video>
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="2">
				<img src="{{ asset('data_file/1573315364_ed953989-ba21-43e4-85b5-ecb080feb155.jpg') }}">
			</a>
		</div>
		<div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
			<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="3">
				<video>
					<source src="{{ asset('data_file/1573462144_ghdt.mp4') }}" type="video/mp4">
				</video>
			</a>
		</div>
	</div>
</div>

<div class="modal fade and carousel slide" id="media" tabindex="-1" role="dialog" aria-labelledby="media" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered mw-100 m-0" role="document">
		<div class="modal-content align-items-center vh-100">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body d-flex align-items-center mb-5">
				<div id="media-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<ol class="carousel-indicators">
						<li data-target="#media-carousel" data-slide-to="0"class="active"></li>
						<li data-target="#media-carousel" data-slide-to="1"></li>
						<li data-target="#media-carousel" data-slide-to="2"></li>
						<li data-target="#media-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{ asset('data_file/1573315364_ed953989-ba21-43e4-85b5-ecb080feb155.jpg') }}">
						</div>
						<div class="carousel-item">
							<video id="carousel-video" controls>
								<source src="{{ asset('data_file/1573462144_ghdt.mp4') }}" type="video/mp4">
							</video>
						</div>
						<div class="carousel-item">
							<img src="{{ asset('data_file/1573315364_ed953989-ba21-43e4-85b5-ecb080feb155.jpg') }}">
						</div>
						<div class="carousel-item">
							<video id="carousel-video" controls>
								<source src="{{ asset('data_file/1573462144_ghdt.mp4') }}" type="video/mp4">
							</video>
						</div>
					</div>
					<a class="carousel-control-prev" href="#media-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#media-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<!-- <script src="{{ asset('js/lightbox.js') }}"></script> -->

<script type="text/javascript">
	// Pause video when sliding
	$('#media-carousel').on('slide.bs.carousel', function () {
		const video = $(this).find('.carousel-inner .active video');
		if(video.length) {
			video.get(0).pause();
		}
	});

	// Click backdrop to close
	$(document).click(function(e){
		if ( $('.modal.and.carousel').hasClass('show') ) {
			if ( $(e.target).closest('#media-carousel>*').length > 0 ) {
				return true;
			};
			$('button.close').click();
		};
	});
</script>
 
@endsection

