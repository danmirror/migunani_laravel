@extends('layout.base')

@section('title','Gallery | Migunani')
@section('link')
	<link rel="stylesheet" href="{{ asset('css/style-galeri.css') }}" >
@endsection

@section('nav')
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#">
            <img src="{{asset('image/logo1.png') }}"   class="nav" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
            @if (Session('login'))
            <li class="nav-item" >
                <a class="nav-link " href="/admin">Admin<span class="sr-only">(current)</span></a>
            </li>
            @endif
        <li class="nav-item" >
            <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active"  href="/galery">Gallery</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/about">About</a>
        </li>
        </ul>
    </div>
</nav>
@endsection

@section('container')



<div class="container pt-3" >
<h1 class="font-weight-light text-center mt-4 mb-0">Migunani Gallery</h1>
<hr class="mt-2 mb-5 " style="width:70%;">
	<div class="row">
		<?php $count_thumb = 0;?>
		@foreach($data as $data_file)
		
			@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
			<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
				<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
					<img src="{{ asset('storage/'.$data_file->file) }}">
				</a>
			</div>
			@endif

			@if($data_file->type =='mp4' || $data_file->type =='3gp') 
			<div class="col-6 col-sm-6 col-lg-3 col-xl-3 mb-3">
				<a class="media-thumbnail" data-toggle="modal" data-target="#media" data-slide-to="{{$count_thumb}}">
					<video>
						<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
					</video>
					<div class="playpause"></div>
				</a>
			</div>
			@endif
			<?php $count_thumb++;?>
		@endforeach

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
					<?php $count_indicator= 0;?>
					@foreach($data as $data_file)
					<?php $count_indicator++;	?>
							@if($count_indicator==1)
								<li data-target="#media-carousel" data-slide-to="{{ $count_indicator}}" class="active"></li>
							@endif
							@if($count_indicator>1)
								<li data-target="#media-carousel" data-slide-to="{{ $count_indicator}}"></li>
							@endif
							
						@endforeach
					</ol>
					<div class="carousel-inner">
						<?php $count_preview = 0;?>

						@foreach($data as $data_file)
							<?php $count_preview++;	?>
							@if($count_preview==1)
								@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
									<div class="carousel-item active">
										<img src="{{ asset('storage/'.$data_file->file) }}">
									</div>
									@endif
									@if($data_file->type =='mp4' || $data_file->type =='3gp') 
									<div class="carousel-item active">
										<video id="carousel-video" controls>
											<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
										</video>
									</div>
									@endif
								@endif
							@if($count_preview>1)
								@if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
								<div class="carousel-item ">
									<img src="{{ asset('storage/'.$data_file->file) }}">
								</div>
								@endif					
								@if($data_file->type =='mp4' || $data_file->type =='3gp') 
								<div class="carousel-item">
									<video id="carousel-video" controls>
										<source src="{{ asset('storage/'.$data_file->file) }}" type="video/mp4">
									</video>
								</div>
								@endif
							@endif
						@endforeach
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

	// Stop video when sliding
	$('#media.carousel .close').on('click',function(){
		const video = $('#media-carousel').find('.carousel-inner .active video');
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

