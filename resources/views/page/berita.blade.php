@extends('layouts.page.app')

@section('title', 'Kumpulan Berita')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-newspaper"
                aria-hidden="true"></i> BERITA</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#001aff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#001aff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i
                        class="fas fa-newspaper"></i> Berita</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

<div class="container">
    <div class="header">
        @foreach($berita as $b)
        <div class="col-lg-12 mt-5 mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <img src="/image/{{$b->gambar}}" alt="" class="img img-thumbnail"
                        style="background:transparent;border:none;border-radius:10px;" width="300">
                </div>
                <div class="col-lg-8">
                    <a href="{{route('baca-berita', $b->id)}}" style="color:#0011ff;font-weight:bold;">{{$b->judul}}</a>

                    <p class="mt-3">
                    <?php
                    $a =  $b->isi;
                    echo substr($a,0,400)."<br>"."...";
                    ?>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
