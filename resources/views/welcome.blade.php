<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP PGRI CIRANJANG</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
    .top {
        position: relative;
        background-image: linear-gradient(-90deg, #0984e3, #00cec9);
        width: 100%;
        height: 520px;
    }

    .carousel-inner img {
        width: 100%;
        height: 640px;
        object-fit: cover;
    }

    marquee {
        width: 1200px;
        margin-right: 30px;
    }

    * {
        font-family: 'Poppins';
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

    #foot {
        background: #10A5F5;
        height: 450px;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 30px;
        border: none;
        outline: none;
        background-color: #103af5;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #1032f5;
    }

    .font12 {
        font-size: 12px;
    }

    .font13 {
        font-size: 13px;
    }

    .font14 {
        font-size: 14px;
    }

    .font15 {
        font-size: 15px;
    }

    .font16 {
        font-size: 16px;
    }

    .font18 {
        font-size: 18px;
    }

    @media only screen and (max-width: 600px) {
        .carousel-inner img {
            width: 100%;
            height: 50%;
        }

        #foot {
            background: #1045f5;
            height: 800px;
        }

        #paragrafHP {
            font-size: 10px;
        }

        #fontNav {
            font-size: 10px;
        }

        marquee {
            width: 200px;
            margin-right: 30px;
        }

        .font14 {
            font-size: 12px;
        }

        .bd-title {
            font-size: 13px;
        }

        .font-size-sm {
            font-size: 12px;
        }

        .fontMobile {
            font-size: 10px;
        }
    }

</style>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

    <nav class="navbar navbar-expand-md  navbar-dark" style="background: #103af5;">
        <div class="container-fluid">
            <ul class="navbar-nav ml-auto">
                <div class="row">
                    <li class="nav-item">
                        <marquee behavior="" class="mt-2 fontMobile font14 text-white" direction="left">
                            Selamat Datang Di Website SMP PGRI CIRANJANG, Dapatkan Informasi Terkait SMP PGRI CIRANJANG
                            Disini . . .
                        </marquee>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-2 fontMobile font14" href="{{route('login')}}"><i
                                class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </div>

            </ul>
        </div>
    </nav>

    <header class="pt-3 border-bottom">
        <div class="container pt-md-1 pb-md-1">
            <ul class="navbar-nav">
                <div class="row">
                    <li class="nav-item">
                        <img src="/image/logo/logo.png" alt="" class="img img-thumbnail" width="80"
                            style="border:none;background:transparent;">&emsp;
                    </li>
                    <li class="navbar-nav">
                        <h5 class="bd-title mt-4 mb-0 font-weight-bold" style="color:#1027f5;">SMP PGRI CIRANJANG</h5>
                        <p class="mt-0 font-size-sm">Unggul, Santun, Bersih Dan Berakhlaq</p>
                    </li>

                </div>
            </ul>

        </div>
    </header>

    <!-- Navbar Menu -->
    <nav class="navbar navbar-expand-md navbar-dark" style="background:#101ff5;border:5px #1027f5;">
        <div class="container-fluid">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" style="background-color:#1c4dd1;" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <i class="fa fa-bars" style="color:#fff;"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar" style="width:100%;">
                <ul class="navbar-nav text-white">
                    <li class="nav-item ">
                        <a class="nav-link font14 text-white" id="klik" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            Profile
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('sejarah')}}">Sejarah</a>
                            <a class="dropdown-item font14" href="{{route('akreditasi')}}">Akreditasi</a>
                            <a class="dropdown-item font14" href="{{route('visi-misi')}}">Visi, Misi Dan Tujuan</a>
                            <!-- <a class="dropdown-item font14" href="{{route('struktur-organisasi')}}">Struktur Organisasi</a> -->
                            <a class="dropdown-item font14" href="{{route('profile-sekolah')}}">Profile Sekolah</a>
                            <a class="dropdown-item font14" href="{{route('galeri')}}">Fasilitas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font14 text-white" href="{{route('pengumuman')}}">Pengumuman</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font14 text-white" href="" id="navbardrop"
                            data-toggle="dropdown">
                            Kegiatan
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item font14" href="{{route('intrakulikuler')}}">Intrakulikuler</a>
                            <a class="dropdown-item font14" href="{{route('ekstrakulikuler')}}">Ekstrakulikuler</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font14 text-white" href="{{route('berita')}}">Berita</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <!-- End Navbar Menu -->

    <!-- Carousel Banner -->
    <div id="crs01" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#crs01" data-slide-to="0" class="active"></li>
            <li data-target="#crs01" data-slide-to="1"></li>
            <li data-target="#crs01" data-slide-to="2"></li>
            <!-- <li data-target="#demo" data-slide-to="2"></li> -->
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider/smp.jpg" alt="" width="1100" height="550">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/db.jpg" alt="" width="1100" height="550">
            </div>
            <div class="carousel-item ">
                <img src="/assets/img/slider/aktivitas.jpg" alt="" width="1100" height="550">
            </div>
        </div>
        <a class="carousel-control-prev" href="#crs01" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#crs01" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Akhir Carousel -->

    <!-- main content -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="row">

                    <!-- berita section -->
                    <div class="col-md-12 mb-3" id="berita">
                        <h4 class="font18" style="color:#1027f5;"><i class="fas fa-clipboard-list"></i> BERITA TERBARU
                        </h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($berita as $b)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$b->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body">
                                        <a href="{{route('baca-berita', $b->id)}}"
                                            class="text-dark text-decoration-none">
                                            <h6>{{ $b->judul }}</h6>
                                        </a>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ date('d-m-Y',strtotime($b->created_at)) }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('berita')}}" class="font-weight-bold text-decoration-none font14 mb-3"
                            style="color: #1027f5;">Lihat Lebih Banyak</a>
                    </div>

                    <!-- end berita section -->


                    <!-- fasilitas section -->
                    <div class="col-md-12 mb-3 mt-4" id="fasilitas">
                        <h4 class="font18" style="color:#103af5;"><i class="fas fa-images"></i> FASILITAS SEKOLAH</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($galeri as $g)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$g->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h6>{{$g->judul }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="{{route('galeri')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                            style="color: #101ff5;">Lihat Lebih Banyak</a>
                    </div>
                    <!-- end fasilitas section -->

                    <!-- eskul section -->
                    <div class="col-md-12 mb-3 mt-4" id="eskul">
                        <h4 class="font18" style="color:#1027f5;"><i class="fas fa-video"></i> EKSTRAKULIKULER</h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($eskul as $e)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm border-0 rounded-lg">
                                    <div class="card-img">
                                        <img src="/image/{{$e->gambar}}" class="w-100"
                                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h6>{{ $e->nama_eskul }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a href="{{route('eskul')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                            style="color: #1045f5;">Lihat Lebih Banyak</a>
                    </div>

                    <!-- end eskul section -->

                </div>
            </div>
            <div class="col-md-4">

                <!-- agenda section -->
                <div class="title mb-4">
                    <h4 class="font18" style="color:#104df5;"><i class="fa fa-calendar" aria-hidden="true"></i> AGENDA
                        TERBARU</h4>
                </div>

                @foreach($agenda as $ag)
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <h6>{{ $ag->judul }}</h6>
                        <hr>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $ag->lokasi }}
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            {{ date('d-m-Y', strtotime($ag->tanggal)) }}
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- end agenda section -->

                <!-- kategori section -->
                <div class="title mb-4 mt-5">
                    <h4 class="font18" style="color:#103af5;"><i class="fa fa-folder" aria-hidden="true"></i> PENGUMUMAN
                    </h4>
                </div>

                @foreach($pengumuman as $p)
                <div class="list-group">
                    <li href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        {!! $p->deskripsi !!}</li>
                </div>
                @endforeach


                <!-- end kategori section -->

            </div>
        </div>
    </div>
    <!-- end main content -->

    <!-- prestasi -->
    <div class="container-fluid">
        <div class="col-md-12 mb-3" id="prestasi">
            <h4 class="text-center font18" style="color:#1f10f5;"><i class="fas fa-trophy"></i> PRESTASI SEKOLAH</h4>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <th style="background:#101ff5;color:#fff;">No</th>
                        <th style="background:#1032f5;color:#fff;">Nama&nbsp;Lomba</th>
                        <th style="background:#104df5;color:#fff;">Bidang</th>
                        <th style="background:#103af5;color:#fff;">Juara</th>
                        <th style="background:#1027f5;color:#fff;">Keterangan</th>
                    </thead>
                    <?php $no = 1; ?>

                    <tbody style="font-size:14px;">
                        @foreach($prestasi as $p)
                        <tr>
                            <td style="text-align:center;">{{$no++}}</td>
                            <td>{{$p->nama_lomba}}</td>
                            <td style="text-align:center;">{{$p->bidang_lomba}}</td>
                            <td style="text-align:center;">{{$p->juara}}</td>
                            <td style="text-align:center;">{!! $p->ket !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('prestasi')}}" class="font-weight-bold font14 text-decoration-none mb-3"
                style="color: #103af5;">Lihat Lebih Banyak</a>
        </div>
    </div>


    <br><br>
    <footer class="mt-5" id="foot" style="background: #222f3e">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Peta Sekolah</h6>
                    <center>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6894103101386!2d107.27213721431603!3d-6.807583968474162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6855a0b778e567%3A0x55fda2f35408cc9c!2sSMP%20PGRI%20Ciranjang!5e0!3m2!1sid!2sid!4v1606908231800!5m2!1sid!2sid"
                            width="250" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </center>
                </div>
                <div class="col-md-4 col-12">
                    <br>
                    <p class="mt-5 text-white ml-5">Nomor Telepon : 0877-0102-6553</p>
                    <p class="text-white ml-5">Email : smppgriciranjang@gmail.com</p>
                    <p class="text-white ml-5">Alamat : Jl Raya Sipon Desa Sindangjaya Kec Ciranjang Kab Cianjur (43282)
                    </p>
                </div>
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Media Sosial</h6>
                    <div class="row justify-content-center">
                        <a href="#" class="">
                            <img src="/image/logo/fb.png" alt="" class="img img-thumbnail" width="50"
                                style="background: transparent;border:none;">
                        </a>
                        <a href="#" class="">
                            <img src="/image/logo/ig.png" alt="" class="img img-thumbnail" width="50"
                                style="background: transparent;border:none;">
                        </a>
                        <a href="">
                            <img src="/image/logo/yt.png" alt="" class="img img-thumbnail" width="50"
                                style="background: transparent;border:none;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-10">
            <p class="text-center text-white" style="font-size: 15px;font-weight:bold;padding-top:80px;">Copyright SMP
                PGRI CIRANJANG | 2020</p>
           </div>
    </footer>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('a#klikF').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#fasilitas").offset().top
                    }, 1000)
                }),
                $('a#klikP').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#prestasi").offset().top
                    }, 1000)
                }),
                $('a#klikE').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#eskul").offset().top
                    }, 1000)
                }),
                $('a#klikB').click(function () {
                    $('html, body').animate({
                        scrollTop: $("div#berita").offset().top
                    }, 1000)
                })
        });

        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

</body>

</html>
