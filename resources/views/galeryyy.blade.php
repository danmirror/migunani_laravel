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

<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Migunani Gallery</h1>

<hr class="mt-2 mb-5">

<div class="row text-center text-lg-left">
@foreach($data as $data_file)

  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="{{ url('data_file/'.$data_file->file) }}" alt="" id="thumnails">
        </a>
       <p> {{$data_file->judul}}</p>
  </div>
  @endforeach
  
</div>

</div>
<!-- /.container -->

@endsection