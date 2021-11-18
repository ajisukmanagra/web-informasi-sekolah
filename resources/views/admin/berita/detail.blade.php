@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Berita</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.berita.index')}}" class="text-white text-decoration-none">Kelola Berita</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Berita</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Detail Berita</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$berita->judul}}</h5>
                    <center>
                        <img src="{{ asset('/image/'.$berita->gambar)}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $berita->isi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 