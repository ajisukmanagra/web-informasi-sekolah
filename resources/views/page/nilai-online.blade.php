@extends('layouts.page.app')

@section('header')
<header class="pt-3 border-bottom">
    <div class="container pt-md-1 pb-md-1">
        <h3 class="bd-title mt-3 mb-4 font-weight-bold" style="color: #0099ff;"><i class="fas fa-trophy" aria-hidden="true"></i> NILAI ONLINE</h3>
    </div>
</header>

<nav aria-label="breadcrumb" style="background:#0099ff;color:#fff;">
    <div class="container">
        <ol class="breadcrumb" style="background:#0099ff;color:#fff;">
            <li class="breadcrumb-item"><a href="/" style="color:#fff;text-decoration:none;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#" style="color:#fff;text-decoration:none;"><i class="fas fa-trophy"></i> Nilai Online</a></li>
        </ol>
    </div>
</nav>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h6><i class="fas fa-trophy"></i> Nilai Online</h6>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped" id="nilai">
                <thead class="">
                <tr>
                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                    <th scope="col">NIS</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">NILAI</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomor = 1; ?>
                @foreach ($nilais as $no => $nilai)
                    <tr>
                        <th scope="row" style="text-align: center">{{$nomor++}}</th>
                        <td>{{ $nilai->nis }}</td>
                        <td>{{ $nilai->nisn}}</td>
                        <td>{{ $nilai->nama}}</td>
                        <td>{{ $nilai->kelas->nama_kelas}}</td>
                        <td><a href="{{route('nilai-online-set', $nilai->nis)}}">Lihat Nilai</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    // datatable
    $(document).ready(function() {
        $('#nilai').DataTable();
    });
</script>
@stop 