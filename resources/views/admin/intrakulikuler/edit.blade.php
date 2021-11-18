@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Kegiatan Intrakulikuler</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.intrakulikuler.index')}}" class="text-white text-decoration-none">Kegiatan Intrakulikuler</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Kegiatan</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-camera"></i> Edit Kegiatan</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.intrakulikuler.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$intrakulikuler->id}}">
                            <div class="form-group">
                                <label>JUDUL KEGIATAN</label>
                                <input type="text" name="title" value="{{ old('title', $intrakulikuler->title) }}" placeholder="Masukkan Judul Kegiatan" class="form-control @error('title') is-invalid @enderror">

                                @error('title')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GAMBAR KEGIATAN</label>
                                <input type="file" name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL KEGIATAN</label>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" class="form-control @error('tanggal') is-invalid @enderror">
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