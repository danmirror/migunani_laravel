@extends('layout.base')

@section('title',' Edit | Migunani ')

@section('nav')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo1.png') }}"    class="nav" alt="">
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
<div class="container" id="foot">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2" >Form Edit</h1>

            <form action="/admin/{{$data->id}}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="judul">masukan caption</label>
                    <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                     id="judul" placeholder="masukan judul" name="judul" value="{{ $data->judul }}">
                    @error('judul')<div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>
                

                <button type="submit"  class="btn btn-primary">Edit</button>
            </form>
                            
        </div>
    </div>
</div>
@endsection