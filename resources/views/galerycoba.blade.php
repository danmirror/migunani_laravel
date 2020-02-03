@extends('layout.base')

@section('title','ini galery')

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
      <!-- Page Content -->
<div class="container">
<h1 class="font-weight-bold my-4 text-center">Migunani Gallery</h1>
<hr class="mt-2 mb-5">

<div class="portfolio-slides">
    <div class="row text-center text-lg-left">

    @foreach($data as $data_file)
            <div class="col-lg-3 col-md-4 col-6 mb-4 p-3 " >
                    
            @if ($data_file->type =='jpg')
                <a href="{{ url('data_file/'.$data_file->file) }} " id="playvideo">
                    <img class="img-fluid img-thumbnail" src="{{ url('data_file/'.$data_file->file) }}" alt="" id="thumnails">
                </a>
            @endif

            @if ($data_file->type =='mp4') 
            <div class="wrapper ">
                <a href="{{ url('data_file/'.$data_file->file) }}" id="playvideo" >
                    <video   class="thumnails-admin  img-thumbnail" id="myVideo" >
                        <source  src="{{ url('data_file/'.$data_file->file) }}"  >
                    </video>
                    <div class="playpause"></div>
                </a>
                
                </div>
            @endif 
            
            <p> {{$data_file->judul}}</p>
            </div>
    
    @endforeach
    </div>
</div>
</div>
<!-- /.container -->


@endsection

@section('script')
<script src="{{ asset('js/lightbox.js') }}"></script>
<script>

    $('.portfolio-slides').slickLightbox({
    itemSelector        : 'a',
    navigateByKeyboard  : true,

    // autoplay:false,
    // maxHeight: 1700, 
    // maxWidth: 1000
  
    });
    // $("#playvideo").onclick(function(){
    //     var vid = document.getElementById("myVideo");
    //     vid.autoplay = false;
    //     vid.load();
    // });

    $('#playvideo').click( function(){
        
        console.log("masuk");
        $(this).removeAttr("autoplay");
    
    });
   
</script>
 
@endsection

@section('force')
    <script>

    $('#playvideo').click( function(){
        console.log("masuk");
    $('video').removeAttr("autoplay");
    
    });
    </script>

@endsection