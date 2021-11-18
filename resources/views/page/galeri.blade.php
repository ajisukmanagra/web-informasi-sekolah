@extends('layouts.page.app')

@section('title', 'Fasilitas')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-landmark" aria-hidden="true"></i> FASILITAS</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-landmark"></i> Fasilitas</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
    <div class="row mt-5">
        @foreach($galeri as $g)
        <div class="col-lg-4 mb-3">
            <div class="card shadow">
                <a href="/image/{{$g->gambar}}" target="__blank">
                    <img src="/image/{{$g->gambar}}" alt="" class="card-img-top" style="height:250px;">
                </a>
                <div class="card-body">
                    <h6>{{$g->judul}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop 