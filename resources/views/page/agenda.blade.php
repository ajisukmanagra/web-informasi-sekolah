@extends('layouts.page.app')

@section('title', 'agenda')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #001aff;"><i class="fas fa-chalkboard-teacher"></i> Agenda</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#003cff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0026ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-chalkboard-teacher"></i> Agenda</a></li>
        </ol>
    </div>
</nav>
@stop

section('content')
<div class="container">
    <div class="card">
        <div class="row mt-5">
            @foreach($agendas as $agenda)
            <div class="card-body">
                <h6>{{$k->judul}}</h6>
                <td>{{ $agenda->lokasi}}</td>
                <p class="mb-0">{{$k->tanggal}}</p>
            </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@stop
