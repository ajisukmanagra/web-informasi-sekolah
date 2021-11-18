@extends('layouts.page.app')

@section('title', 'Struktur Organisasi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-boxes" aria-hidden="true"></i> Struktur Organisasi</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-boxes"></i> Struktur Organisasi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
    <center>
        <img src="/image/logo/logo.png" alt="" class="img img-thumbnail border-0" width="250">
    </center>
    
    @foreach ($strukturs as $struktur)
        <ul class="list-group list-group-flush mt-4 text-center">
            <li class="list-group-item">Komite Sekolah : {{$struktur->komite_sekolah}}</li>
            <li class="list-group-item">Kepala Sekolah : {{$struktur->kepala_sekolah}}</li>
            <li class="list-group-item">Wakil Kepala Sekolah : {{$struktur->wk_sekolah}}</li>
            <li class="list-group-item">Kaur Tata Usaha : {{$struktur->kaur_tu_sekolah}}</li>
            <li class="list-group-item">Staff Kurikulum : {{$struktur->staff_kurikulum}}</li>
            <li class="list-group-item">Staff Kesiswaan : {{$struktur->staff_kesiswaan}}</li>
            <li class="list-group-item">Staff Humas : {{$struktur->staff_humas}}</li>
        </ul>    
    @endforeach
@stop