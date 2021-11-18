@extends('layouts.page.app')

@section('title', 'Akreditasi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-chart-line" aria-hidden="true"></i> Akreditasi</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-chart-line"></i> Akreditasi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<center>
    <img src="/image/logo/logo.png" alt="" class="img img-thumbnail border-0" width="250">
</center>
<p class="text-center mt-4">
    SMPS PGRI CIRANJANG Memiliki Akreditasi A.
</p>
<p class="text-center">
    No SK Akreditasi : 782/BAN-S/M/SK/2019
</p>
<p class="text-center">
    Tgl SK Akreditasi : 17-09-2019.
</p>
@stop
