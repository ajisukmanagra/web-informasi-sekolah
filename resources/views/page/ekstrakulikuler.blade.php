@extends('layouts.page.app')

@section('title', 'Ekstrakulikuler')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-camera" aria-hidden="true"></i> EKSTRAKULIKULER</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-camera"></i> Ekstrakulikuler</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
    <div class="row mt-5">
        @foreach($ekstrakulikuler as $k)
        <div class="col-lg-4 mb-3">
            <div class="card shadow">
                <a href="/image/{{$k->image}}" target="__blank">
                    <img src="/image/{{$k->image}}" alt="" class="card-img-top" style="height:250px;">
                </a>
                <div class="card-body">
                    <h6>{{$k->title}}</h6>
                    <p class="mb-0">{{$k->tanggal}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop 