@extends('layouts.page.app')

@section('title', 'Visi Misi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0004ff;"><i class="fas fa-tasks aria-hidden="true"></i> Visi , Misi Dan Tujuan</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0011ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0004ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-tasks"></i> Visi Dan Misi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<div class="row">
    <div class="col-md-6 col-12">
        <h5 class="mt-4 font-weight-bold" style="color: #0026ff;">
            Tak Cuma Sebatas Gelar
        </h5>
        <p>
            "Pendidikan bukan cuma pergi ke sekolah dan mendapatkan gelar. Tapi juga memperluas pengetahuan dan menyerap ilmu kehidupan."
        </p>
    </div>
    <div class="col-md-6 col-12">
        <h5 class="mt-4 font-weight-bold text-center" style="color: #002fff;">
            Visi
        </h5>
        <p class="text-center">
            Unggul, Santun, Bersih Dan Berahlaq.
        </p>
    </div>
    <div class="col-md-12 col-12">
        <h5 class="mt-4 font-weight-bold" style="color: #002fff;">
            Misi
        </h5>
        <p>
            "Disiplin Dalam Kerja, Mewujudkan Keluarga, Handal, Evaluatif Dengan Meningkatkan Silaturahmi."
        </p>
        <img src="/image/logo/logo.png" alt="" class="img img-thumbnail border-0" width="250">
    </div>
</div>

@stop