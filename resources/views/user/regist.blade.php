@extends('layout/base')

@section('title','Register | Migunani')

@section('nav')
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo1.png') }}"   style="max-height:150px;max-width:150px;margin-top:10px;" class="nav">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
            @if (Session('login'))
                <li class="nav-item" >
                    <a class="nav-link " href="/data">Admin <span class="sr-only">(current)</span></a>
                </li>
            @endif
        <li class="nav-item" >
            <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link "  href="/galery">gallery</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link"  href="/about">about</a>
        </li>
        </ul>
    </div>
</nav>
@endsection


@section('content')
    <!-- Main Section -->
    <section class="container" id="mybody">
        <!-- Add Your Content Inside -->
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <!-- Remove This Before You Start -->
                    <h1>  Register | Admin</h1>
                    <hr>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ url('/regist/kirim') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Password Confirmation:</label>
                            <input type="password" class="form-control" id="confirmation" name="confirmation">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            <a href=" {{url('login')}} "  class="btn btn-md btn-danger">Cancel</a>
                            </div>
                        </form>
                        
                </div>
            <div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection