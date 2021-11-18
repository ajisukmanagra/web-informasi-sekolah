@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Agenda</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.agenda.index')}}" class="text-white text-decoration-none">Kelola Agenda</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Agenda</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Agenda</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.agenda.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$agenda->id}}">
                            <div class="form-group">
                                <label>JUDUL AGENDA</label>
                                <input type="text" name="judul" placeholder="Masukkan Judul Agenda" class="form-control @error('judul') is-invalid @enderror" value="{{$agenda->judul}}">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>LOKASI AGENDA</label>
                                <input type="text" name="lokasi" placeholder="Masukkan Lokasi Agenda" class="form-control @error('lokasi') is-invalid @enderror" value="{{$agenda->lokasi}}">

                                @error('lokasi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL AGENDA</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$agenda->tanggal}}">
                                @error('tanggal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
</div>
        </section>
    </div>
@stop