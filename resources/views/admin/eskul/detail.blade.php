@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h1>Detail Eskul</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.eskul.index')}}" class="text-white text-decoration-none">Kelola Eskul</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Detail Eskul</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-running"></i> Detail Eskul</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{$eskul->nama_eskul}}</h5>
                    <center>
                        <img src="/image/{{$eskul->gambar}}" alt="" class="img img-thumbnail border-0 rounded-lg" width="300">
                    </center>
                    <p>{!! $eskul->deskripsi !!}</p>
                </div>
            </div>
        </div>
</div>
    </section>
</div>

@stop 