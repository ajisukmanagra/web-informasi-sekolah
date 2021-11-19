@extends('layouts.page.app')

@section('title', 'Kumpulan Pengumuman')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0d18ad;"><i class="fas fa-fw fa-bullhorn" aria-hidden="true"></i> PENGUMUMAN</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0011ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0011ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-fw fa-bullhorn"></i> Pengumuman</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

    @foreach($pengumuman as $p)
    <div class="col-lg-4 col-12 mt-5">
        <a href="#" data-toggle="modal" data-target="#modal{{$p->id}}" class="text-decoration-none text-dark">
            <div class="card shadow" style="">
                <div class="card-body" style="">
                    <h6 class="font-weight-bold"><i class="fas fa-bullhorn"></i> {{$p->title}}</h6>
                    <p class="mt-0 mb-0" style="font-size: 12px;">Tanggal Upload {{date('d-m-Y', strtotime($p->created_at))}}</p>
                </div>
            </div>
        </a>
    </div>

    <div class="modal" id="modal{{$p->id}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="mt-4 text-center font-weight-bold">{{$p->title}}</h5>
                    <p class="mt-4 ml-3" style="text-align:justify;font-size: 12px;">{!! $p->deskripsi !!}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
@stop