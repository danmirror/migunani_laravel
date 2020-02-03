@extends('layout.base')

@section('title','ini galery')

@section('nav')
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/header.png') }}"   style="max-height:150px;max-width:150px;margin-top:10px;" alt="">
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
      <!-- Page Content -->
<div class="container">

<h1 class="font-weight-bold my-4">Migunani Gallery</h1>

<hr class="mt-2 mb-5">

<div class="row text-center text-lg-left">

@foreach($data as $data_file)
    <div class="col-lg-3 col-md-4 col-6 p-3">
        <video  class="thumnails-admin img-fluid" poster="{{ url('data_file/'.$data_file->file) }}" id="click" >
            <source  src="{{ url('data_file/'.$data_file->file) }}"  id="file">
        </video>
    </div>
    
    @endforeach

</div>

</div>
<!-- /.container -->

@endsection

@section('script')
<script>
    fileName = document.querySelector('#file').src; 
    extension = fileName.split('.').pop(); 
    console.log(extension); 
    // if (extension == "mp4"){
    //     console.log("keren");
    // }
   
    // jQuery("document").ready(function(){
    //     html5Lightbox.showLightbox(4, 'http://player.vimeo.com/video/1084537', 'Big Buck Bunny');
    // });
    // $("video#click").click(function(){
    //     this.paused?this.play():this.pause();
        
    //     return false;
    // });

</script>
@endsection




<!-- slick -->
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'> -->
    <link rel='stylesheet' href='https://jongacnik.github.io/slick-lightbox/dist/slick-lightbox.css'>
    <!-- <link rel='stylesheet' href='https://mreq.github.io/slick-lightbox/dist/slick-lightbox.css'> --> <!--lebih kecil dari -->
    <link rel='stylesheet' href='https://mreq.github.io/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick.css'>
    <link rel='stylesheet' href='https://mreq.github.io/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick-theme.css'>




<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script> -->
    <!-- <script src='https://jongacnik.github.io/slick-lightbox/dist/slick-lightbox.js'></script> -->
    <script src='https://mreq.github.io/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick.min.js'></script>
    