@extends('layout.base')

@section('title',' Admin | Migunani ')

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
        <button class="dark" id="menu-toggle">
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
      
      <div class="content-admin dashboard">
        <div class="container-fluid  my-2">
          @if (session('status'))
              <div class="alert alert-success ">
                  {{ session('status') }}
              </div>
          @endif        
          <h1 class="mt-4 text-center">My Dashboard</h1>
          <hr class="hr-admin">
        </div>
      
          <?php 
              $gambar = 0;
              $video = 0;
              $file = 0;
          ?>
          @foreach($data as $data_file)
          <?php $file++ ?>
            @if ($data_file->type =='jpg' || $data_file->type =='png' || $data_file->type =='jpeg')
              <?php  $gambar++; ?>
            @endif
            @if($data_file->type =='mp4' || $data_file->type =='3gp') 
              <?php  $video++; ?>
              @endif
          @endforeach
          <div class="row ">
              <div class="admin-padding" id="file-index">
                <p  >{{$file}}</p>
                <h6>File</h6>
            </div>
              <div class="admin-padding"   id="gambar">
                <p  >{{$gambar}}</p>
                <h6>Gambar</h6>
            </div>
              <div class="admin-padding "   id="video">
                <p >{{$video}}</p>
                <h6>Video</h6>
            </div>
          </div>
          <!-- chart -->

        <div class="my-5 chart-admin">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    
        
      
   

    @endsection

    @section('script')
    <script src="{{ asset('js/Chart.js') }}"></script>
    <script>
     $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });



        // grafik
      var ctx = document.getElementById("myChart").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels:  ["File","Gambar","Video"],
          datasets: [{
            label: '',
            data: [
              <?php echo json_encode($file); ?>,
              <?php echo json_encode($gambar); ?>,
              <?php echo json_encode($video); ?>
            ],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>
    @endsection
 


