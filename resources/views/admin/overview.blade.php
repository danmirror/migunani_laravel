@extends('layout.base')

@section('title',' Overview | Migunani ')

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
                <p class="dropdown-item" >Migunani</p>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log Out</a>
              </div>
              
            </li>
          </ul>
        </div>
      </nav>
      <div class="content-admin overview">
        <form class="form-inline  mt-2" action="" method="get">
              <input class="form-control mr-sm-1 ml-auto" type="search" placeholder=" cari judul file" aria-label="Search" name="cari">
              <button class="btn btn-outline-info  my-sm-1 " type="submit" >CARI</button>
        </form>
    
        <div class="container-fluid ">
          @if (session('status'))
              <div class="alert alert-success ">
                  {{ session('status') }}
              </div>
          @endif        
          <h1 class="mt-2 text-center">Overview Admin</h1>
          <hr class="hr-admin">
          
          <!-- cart -->
          <div class="container"  class="card" id="foot">
              <div class="row">
              
              @foreach($data as $data_file)
              
                  <div class=" col-sm-6 col-lg-4 col-xl-4 mb-3 ">
                
                      <div class="card img-thumbnail" style="width: 18rem;">
                          <div class="card-body">
                              <p class="card-text  ">
                              @if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
                                    <img class="img-fluid img-thumbnail" src="{{ Storage::url('public/'.$data_file->file) }}" alt="" id="thumnails">  
                              @endif

                              @if($data_file->type =='mp4' || $data_file->type =='3gp') 
                                  <video  class="thumnails-admin img-thumbnail" controls  id="click" >
                                      <source  src="{{ Storage::url('public/'.$data_file->file) }}"  >
                                  </video>
                              @endif 
                              <h6 class="card-title">{{$data_file->judul}}</h6>
                              <a href=" {{$data_file->id}}/edit" class="btn btn-info"->edit</a>

                              <form action=" {{$data_file->id}} " method="post" class="d-inline">
                              @method('delete')
                              @csrf
                                  <button onclick="return confirm('yakin data ingin di hapus?');" type="submit" class="btn btn-danger" >delete</button>
                              </form>
                              
                              <a href="/admin" class="card-link">kembali</a>

                          </div>
                      </div>
                  </div>
          
              @endforeach
              </div>
          </div>
          <!-- endcart -->
        </div>

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