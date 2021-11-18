<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/project_smp/public/seer/default.png">
  <title>SMP PGRI CIRANJANG</title>
  <link href="{{ asset('templet/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templet/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templet/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templet/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>
<style>
  .kotak{
    color: #fff;
  }
</style>
<body id="page-top">
  

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img class="rounded-circle" src="{{ asset('/seer/kp.jpg') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Farijan</div>
      </a>
     
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Kelola Websate
      </div>              
      <li class="nav-item">
        <a class="nav-link collapsed" href="/home">
        <i class="fas fa-tachometer-alt fa-2x text-primary" aria-hidden="true"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-building fa-2x text-primary"></i>
          <span> Profil</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="">Identitas</a>
              <a class="collapse-item" href="">Visi dan Misi</a>
              <a class="collapse-item" href="">Sejarah</a>
              <a class="collapse-item" href="">Struktur Organisasi</a>
              <a class="collapse-item" href="">Sarana dan Prasarana</a>
              <a class="collapse-item" href="">Kimitraan</a>
              <a class="collapse-item" href="">Program Kerja</a>
              <a class="collapse-item" href="">Kondisi Siswa</a>
              <a class="collapse-item" href="">Komite Sekolah</a>
              <a class="collapse-item" href="">Prestasi</a>

          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-users fa-2x text-primary"></i>
          <span> Data Guru</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Direktori Guru</a>
              <a class="collapse-item" href="">Silabus</a>
              <a class="collapse-item" href="">Materi Ajar</a>
              <a class="collapse-item" href="">Materi Ujian</a>
              <a class="collapse-item" href="">Prestasi Guru</a>
              <a class="collapse-item" href="">Kalender Akademik</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fa fa-tasks fa-2x text-primary"></i>
          <span> Data Siswa</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">Direktori Siswa</a>
              <a class="collapse-item" href="#">Prestasi Siswa</a>
               <a class="collapse-item" href="#">Ekstrakurikuler</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-calendar fa-2x text-primary"></i>
          <span>Data Alumi </span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="#">Direktori Alumni</a>
               <a class="collapse-item" href="#">Info Alumni</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/galeri">
        <i class="fas fa-landmark fa-2x text-primary" aria-hidden="true"></i>
          <span>Galeri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
        <i class="fas fa-video fa-2x text-primary" aria-hidden="true"></i>
          <span>Vidio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
        <i class="fas fa-book fa-2x text-primary" aria-hidden="true"></i>
          <span>Buku tamu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
        <i class="fas fa-file-contract fa-2x text-primary" aria-hidden="true"></i>
          <span>Kontak Sekolah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-th-list fa-2x text-primary"></i>
          <span>Fitur Pelengkap </span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="#">Agenda</a>
               <a class="collapse-item" href="#">Artikel</a>
               <a class="collapse-item" href="#">Informasi</a>
               <a class="collapse-item" href="#">Berita</a>
               <a class="collapse-item" href="#">Weblink</a>
               <a class="collapse-item" href="#">Peta Situs</a>
               <a class="collapse-item" href="#">Peta Lokasi</a>
               <a class="collapse-item" href="#">Chatting</a>
               <a class="collapse-item" href="#">Posting Status</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/agenda">
        <i class="fas fa-chalkboard-teacher fa-2x text-primary" aria-hidden="true"></i>
          <span>Agenda</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/berita">
        <i class="fas fa-newspaper fa-2x text-primary" aria-hidden="true"></i>
          <span>Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/intrakulikuler">
        <i class="fas fa-camera fa-2x text-primary" aria-hidden="true"></i>
          <span>Intrakulikuler</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/ekstrakulikuler">
        <i class="fas fa-camera fa-2x text-primary" aria-hidden="true"></i>
          <span>Ekstrakulikuler</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/eskul">
        <i class="fas fa-running fa-2x text-primary" aria-hidden="true"></i>
          <span>Ekskul</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/pengumuman">
        <i class="fas fa-fw fa-bullhorn  fa-2x text-primary" aria-hidden="true"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/prestasi">
        <i class="fas fa-trophy fa-2x text-primary" aria-hidden="true"></i>
          <span>Prestasi</span>
        </a>
      </li>
    </ul>

    
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
  
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-link dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                <div class="kotak">
                  <span id="jam"></span> :
                  <span id="menit"></span> :
                  <span id="detik"></span>
                </div>
                </a>
              </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if(Auth::user()->foto == '')
                <img class="img-profile rounded-circle" src="{{ asset('/seer/logo.jpg')}}" style="max-width: 60px">
                @else
                <img class="img-profile rounded-circle" src="{{ asset('img/guru/'. Auth::user()->foto )}}" style="max-width: 60px">
                @endif
              <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>
                  Keluar
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div> -->

          <div class="row mb-3">
          @yield('content')
           
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">farijan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah Anda Yakin?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            
                  <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SMP PGRI Ciranjang  &copy; <script> document.write(new Date().getFullYear()); </script> - 
              <b><a href="https://www.facebook.com/farijan.muhamad/" target="_blank">Design by. Muhamad Farijan</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('templet/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('templet/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('templet/js/demo/chart-area-demo.js')}}"></script> 
  <script src="{{ asset('templet/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  @yield('js') 
  <script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>
</body>

</html>