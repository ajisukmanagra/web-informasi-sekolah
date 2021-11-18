@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Struktur Organisasi</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.struktur.index')}}" class="text-white text-decoration-none">Struktur Organisasi</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Data</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-boxes"></i> Tambah Struktur Organisasi</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.struktur.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Komite Sekolah</label>
                                <input type="text" name="komite_sekolah" value="{{ old('komite_sekolah') }}" placeholder="Masukkan Komite Sekolah" class="form-control @error('komite_sekolah') is-invalid @enderror">

                                @error('komite_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kepala Sekolah</label>
                                <input type="text" name="kepala_sekolah" value="{{ old('kepala_sekolah') }}" placeholder="Masukkan Kepala Sekolah" class="form-control @error('kepala_sekolah') is-invalid @enderror">

                                @error('kepala_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Wakil Kepala Sekolah</label>
                                <input type="text" name="wk_sekolah" value="{{ old('wk_sekolah') }}" placeholder="Masukkan Wakil Kepala Sekolah" class="form-control @error('wk_sekolah') is-invalid @enderror">

                                @error('wk_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kaur TU Sekolah</label>
                                <input type="text" name="kaur_tu_sekolah" value="{{ old('kaur_tu_sekolah') }}" placeholder="Masukkan Kaur TU Sekolah" class="form-control @error('kaur_tu_sekolah') is-invalid @enderror">

                                @error('kaur_tu_sekolah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Staff Kurikulum</label>
                                <input type="text" name="staff_kurikulum" value="{{ old('staff_kurikulum') }}" placeholder="Masukkan Staff Kurikulum" class="form-control @error('staff_kurikulum') is-invalid @enderror">

                                @error('staff_kurikulum')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label>Staff Kesiswaan</label>
                                <input type="text" name="staff_kesiswaan" value="{{ old('staff_kesiswaan') }}" placeholder="Masukkan Staff Kesiswaan" class="form-control @error('staff_kesiswaan') is-invalid @enderror">

                                @error('staff_kesiswaan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Staff Humas</label>
                                <input type="text" name="staff_humas" value="{{ old('staff_humas') }}" placeholder="Masukkan Staff Humas" class="form-control @error('staff_humas') is-invalid @enderror">

                                @error('staff_humas')
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
        </section>
    </div>
@stop