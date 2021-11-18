@extends('layouts.page.app')

@section('title', 'Baca Berita')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-newspaper" aria-hidden="true"></i> BERITA</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('berita')}}" style="color:#fff;text-decoration:none;"><i class="fas fa-newspaper"></i> Berita</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white" style="text-decoration:none;">{{$berita->judul}}</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

    <h4 class="text-center font-weight-bold mt-5">{{$berita->judul}}</h4>
    <center>
        <img src="/image/beritas/{{$berita->gambar}}" alt="" style="background:transparent;border:none" class="img img-thumbnail mt-3" width="400">
    </center>
    
    <p class="mt-3" style="text-align: justify;">{!! $berita->isi !!}</p>
@stop 