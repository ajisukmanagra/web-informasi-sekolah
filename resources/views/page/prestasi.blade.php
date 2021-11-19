@extends('layouts.page.app')

@section('title', 'Prestasi')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0011ff;"><i class="fa fa-trophy" aria-hidden="true"></i> PRESTASI</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#002fff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0026ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-trophy"></i> Prestasi</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')

<div class="row mt-5">
    <div class="table-responsive">
        <div class="col-lg-12">
            <table class="table table-bordered" id="prestasi">
                <thead>
                    <th style="background:#345bdb;color:#fff;">No</th>
                    <th style="background:#3453db;color:#fff;">Nama&nbsp;Lomba</th>
                    <th style="background:#343fdb;color:#fff;">Bidang</th>
                    <th style="background:#3453db;color:#fff;">Juara</th>
                    <th style="background:#1845c0;color:#fff;">Keterangan</th>
                </thead>
                <?php $no = 1; ?>
                
                <tbody>
                    @foreach($prestasi as $p)
                        <tr style="font-size:14px; background:#fff;">
                            <td style="text-align:center;">{{$no++}}</td>
                            <td>{{$p->nama_lomba}}</td>
                            <td style="text-align:center;">{{$p->bidang_lomba}}</td>
                            <td style="text-align:center;">{{$p->juara}}</td>
                            <td style="text-align:center;">{{$p->ket}}</td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
            <ul class="pagination pagination-sm mt-3">
                {{$prestasi->links()}}
            </ul>
        </div>
    </div>
</div>
@stop 
@push('scripts')
<script>
    $(document).ready(function() {
        $('#prestasi').DataTable();
    });
</script>
@endpush