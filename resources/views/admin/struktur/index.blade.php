@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Struktur Organisasi</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Struktur Organisasi</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-boxes"></i> Struktur Organisasi</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @if(count($strukturs) == 0)
                                <a href="{{route('admin.struktur.create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Data</a>&nbsp;
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">Komite&nbsp;Sekolah</th>
                                <th scope="col">Kepala&nbsp;Sekolah</th>
                                <th scope="col">Wakil&nbsp;Kepala&nbsp;Sekolah</th>
                                <th scope="col">Kaur&nbsp;Tu&nbsp;Sekolah</th>
                                <th scope="col">Staff&nbsp;Kurikulum</th>
                                <th scope="col">Staff&nbsp;Kesiswaan</th>
                                <th scope="col">Staff&nbsp;Humas</th>
                                <th scope="col" style="width: 25%;text-align: center">Aksi&nbsp;Lainnya</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($strukturs as $no => $struktur)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $struktur->komite_sekolah }}</td>
                                    <td>{{ $struktur->kepala_sekolah}}</td>
                                    <td>{{ $struktur->wk_sekolah}}</td>
                                    <td>{{ $struktur->kaur_tu_sekolah}}</td>
                                    <td>{{ $struktur->staff_kurikulum}}</td>
                                    <td>{{ $struktur->staff_kesiswaan}}</td>
                                    <td>{{ $struktur->staff_humas}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.struktur.edit', $struktur->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $struktur->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
    });

    //ajax delete
    function Delete(id)
    {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: [
                'TIDAK',
                'YA'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {

                //ajax delete
                jQuery.ajax({
                    url: "/admin/struktur-organisasi/delete/"+id,
                    data:     {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                icon: 'success',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function() {
                                location.reload();
                            });
                        }else{
                            swal({
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                icon: 'error',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });

            } else {
                return true;
            }
        })
    }
</script>
@stop 