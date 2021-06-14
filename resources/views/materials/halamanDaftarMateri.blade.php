@extends('layouts.app')

@section('content')
{{-- header --}}

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
          <br>
          <br>
          <br>
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Materi</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Materi</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- content --}}
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class=" col ">
        <div class="card">
          <div class="card-header bg-transparent">
            <h2 class="mb-0">Materi</h2>
            <h4 class="mb-0">Materi-materi yang tersaji dibawah ini sangat cocok untuk kalian yang mau terjun ke dunia saham!</h4>
          </div>
          <div class="card-body">
            <div class="row icon-examples">
              <div class="col-lg-4 col-md-100">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                    <div>
                        <i class="ni ni-chart-bar-32"></i>
                        <span><h3>Cara Menghitung Nilai Intrinsik Saham</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Riki Indramawan </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Saham </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="air-baloon">
                    <div class = "col">
                        <i class="ni ni-chart-bar-32"></i>
                        <span><h3>Belajar Analisa Fundamental Perusahaan</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Riki Indramawan </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Saham </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-chart-bar-32"></i>
                        <span><h3>Belajar Analisa Teknikal Saham</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Riki Indramawan </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Saham </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-single-copy-04"></i>
                        <span><h3>Pentingnya Punya Asuransi</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Kevianwillie Handoyo </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Asuransi </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-chart-bar-32"></i>
                        <span><h3>Bagaimana Bandar Bekerja?</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Kevianwillie Handoyo </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Saham </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-money-coins"></i>
                        <span><h3>Sekilas Tentang Cryptocurrency</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Kevianwillie Handoyo </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Cryptocurrency </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-ui-04"></i>
                        <span><h3>Apakah Obligasi Masih Menarik?</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Wahib Muhibi Nur </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Obligasi </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-ruler-pencil"></i>
                        <span><h3>Sekilas Tentang Exchange Traded Fund (ETF)</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Wahib Muhibi Nur </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Reksadana </h4>
                    </div>
                </button>
              </div>
              <div class="col-lg-4 col-md-6">
                <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2">
                    <div>
                        <i class="ni ni-ruler-pencil"></i>
                        <span><h3>Reksadana VS Saham</h3></span>
                    </div>
                    <div class = "col">
                        <span><br></span>
                    </div>
                    <div class = "col">
                        <h5> Presented by: Wahib Muhibi Nur </h4>
                    </div>
                    <div class = "col">
                        <h5> Category: Reksadana </h4>
                    </div>
                </button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
