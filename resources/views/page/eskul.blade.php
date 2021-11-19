@extends('layouts.page.app')

@section('title', 'Eskul')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0400ff;"><i class="fas fa-running" aria-hidden="true"></i> EKSTRAKULIKULER</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#001aff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#002fff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-running"></i> Ekstrakulikuler</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

<div class="row mt-5">
    @foreach($eskul as $e)
    <div class="col-lg-4 mb-3">
        <div class="card shadow">
            <img src="/image/{{$e->gambar}}" alt="" class="card-img-top" style="height:250px;">
            <div class="card-body">
                <h6 class="font-weight-bold">{{$e->nama_eskul}}</h6>
                <p style="font-size: 12px;">Baca Selengkapnya....</p>
                <a href="" data-toggle="modal" data-target="#eskul{{$e->id}}" class="btn btn-primary btn-sm font-weight-bold float-right" style="font-size: 13px;">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    
    <div class="modal" id="eskul{{$e->id}}" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <img src="/image/{{$e->gambar}}" alt="" class="img img-thumbnail mt-4" width="200">
                    </center>
                    <h5 class="mt-4 text-center">{{$e->nama_eskul}}</h5>
                    <p class="mt-3 ml-3" style="text-align:justify;font-size: 12px;">{!! $e->deskripsi !!}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    
</div>
@stop 