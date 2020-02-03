@extends('layout.base')

@section('title',' Post | Migunani ')

@section('container')
   
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="{{ asset('image/logo1.png') }}" width="200px" alt="">
      </div>
      <div class="list-group list-group-flush">
        <a href="/admin" class="list-group-item list-group-item-action bg-light icon-sidebar"> 
            <i class="fas fa-tachometer-alt " ></i>
            Dashboard
        </a>
        <a href="/" class="list-group-item list-group-item-action bg-light icon-sidebar">
            <i class="fab fa-chrome " ></i>
            Web
        </a>
        <a  href="/admin/create" class="list-group-item list-group-item-action bg-light icon-sidebar">
            <i class="fas fa-cloud-upload-alt"></i>
            Post
        </a>
        <a href="/admin/overview" class="list-group-item list-group-item-action bg-light icon-sidebar">
        <i class="fas fa-cog"></i>
            Overview
        </a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button  id="menu-toggle">
          <i class="fas fa-sliders-h"></i>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user"></i>
                  Admin
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <p class="dropdown-item" > Migunani</p>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
          <!-- -->
      <div class="content-admin create">
        <div class="container-fluid  my-5">

          @if (session('status'))
              <div class="alert alert-primary">
                  {{ session('status') }}
              </div>
          @endif  
          <h1 class="mt-4 text-center">Upload File</h1>
          <hr class="hr-admin">

              <form action="/admin/kirim" method="post"  enctype="multipart/form-data" >
              @csrf

              <div class="form-group card">
              <label for="file">Foto</label>
              <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" 
                  id="file" placeholder="masukan foto"  value="{{ old('file') }}">
                  @error('file')<div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

              <div class="form-group card">
              <label for="judul">masukan caption</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" 
              id="judul" placeholder="masukan masukan caption" name="judul"  value="{{ old('judul') }}">
              @error('judul')<div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>
              <button type="submit"  class="btn btn-primary">Tambah Data</button>
              </form>
        </div>
    
      <!-- /#page-content-wrapper -->
      </div>
 
    @endsection


    @section('script')
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
    @endsection