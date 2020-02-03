@extends('layout.base')

@section('title','About | Migunani')
@section('link')
	<link rel="stylesheet" href="{{ asset('css/style-galeri.css') }}" >
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
                <a class="nav-link " href="/admin">Admin<span class="sr-only">(current)</span></a>
            </li>
            @endif
        <li class="nav-item" >
            <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/galery">Gallery</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active"  href="/about">About</a>
        </li>
        </ul>
    </div>
</nav>
@endsection

@section('container')
<div class="container">
<h1 class="font-weight-light text-center mt-4 mb-0">About Us</h1>
<hr class="mt-2 mb-5 " style="width:70%;">
    <div class="row">
        <p style="text-align:center"> Migunani architect adalah jasa di bidang bangunan baik hunian maupun bangunan komersil. 
            Kami melayani jasa di bidang desain dan pelasanaan, interior, eksterior dan landscape. 
            Kami berkomitmen untuk selalu memberikan yang terbaik bagi semua pelanggan</p>
            <div class="row" >
                <div class="col-md-8 mx-5 mb-5 mt-2 about" > 
                    <div class="fab fa-facebook-f">   migunani arch</div><br>
                    <div class="fab fa-instagram"> migunaniarchitect</div><br>
                    <div class="fab fa-twitter"> archmigunani</div><br>
                    <div class="fab fa-whatsapp  mt-3"> 085225832895</div><br>
                    <div > <i class="fas fa-home"></i>
                        Turgenen, Sumberagung, Kec. Moyudan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55563
                    </div><br>
                   
                   
                </div>
            </div>
               
    </div>

</div>

@endsection



