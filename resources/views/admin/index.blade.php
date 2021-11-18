@extends('layouts.templet')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Admin</h1>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="" class="text-decoration-none">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fa fa-home text-white fa-2x"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Kelas</h4>
                    </div>
                    <div class="card-body">
                     <!-- isi -->
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="" class="text-decoration-none">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="fa fa-tag text-white fa-2x"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Mapel</h4>
                    </div>
                    <div class="card-body">
                     <!-- isi -->
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="" class="text-decoration-none">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="fa fa-chalkboard-teacher text-white fa-2x"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Guru</h4>
                    </div>
                    <div class="card-body">
                      
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="" class="text-decoration-none">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fa fa-users text-white fa-2x"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Murid</h4>
                    </div>
                    <div class="card-body">
                      
                    </div>
                  </div>
                </div>
              </a>
            </div>                  
        </div>

        <!-- Grafik -->
        <div class="row">
          <div class="col-md-6 col-12 mb-3">
              <div class="card h-100">
                  <div class="card-body">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-uppercase mb-1"> Grafik Siswa</div>
                      </div>
                      <div id="pie"></div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-12 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"> Grafik Akun</div>
                    </div>
                    <div id="pie2"></div>
                </div>
            </div>
          </div>
        </div>
        


    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
var option = {
        colors : ['#0099ff', '#47C363'],
        series: [{{ $siswa }}, {{ $siswi }}],
        chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['Siswa', 'Siswi'],
    responsive: [{
        breakpoint: 480,
        options: {
        chart: {
            width: 300
        },
        legend: {
            position: 'bottom'
        }
        }
    }]
};

var pie = new ApexCharts(document.querySelector("#pie"), option);
pie.render();

</script>
<script>
var option_2 = {
        colors : ['#0099ff', '#47C363', '#FC544B'],
        series: [{{ $guru }}, {{ $murid }}, {{ $walikelas }}],
        chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['Guru', 'Siswa', 'Walikelas'],
    responsive: [{
        breakpoint: 480,
        options: {
        chart: {
            width: 300
        },
        legend: {
            position: 'bottom'
        }
        }
    }]
};

var pie_2 = new ApexCharts(document.querySelector("#pie2"), option_2);
pie_2.render();
</script>
@endsection