@extends('layouts.app')

@section('content')
{{-- header --}}
<div class="header bg-primary pb-4">
    <div class="container-fluid">
       <div class="header-body">
          <br>
          <br>
          <br>
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Membership</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('membership') }}">Pilih Membership </a></li>
                            <li class="breadcrumb-item"><a href="{{ route('checkoutb') }}">Halaman Checkout</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('membership') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- content --}}
<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Halaman Checkout</h1>
                <div>
                    Anda telah memilih paket B bulan dengan durasi 180 hari dengan total pembayaran sebesar Rp500.000,- 
                </div>
                <p>
                  Silahkan pilih metode pembayaran.
                </p>
            </div>
        </div>
        <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">BNI</p>
                            <p class="text-center">BNI Virtual Account</p>
                            <p class="text-center">1000000001</p>
                            <p class="text-center"><a class="btn btn-success" href="{{ route('bnib')}}">Bayar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">BRI</p>
                            <p class="text-center">BRI Virtual Account</p>
                            <p class="text-center">1000000002</p>
                            <p class="text-center"><a class="btn btn-success" href="{{ route('brib')}}">Bayar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">BCA</p>
                            <p class="text-center">BCA Virtual Account</p>
                            <p class="text-center">1000000003</p>
                            <p class="text-center"><a class="btn btn-success" href="{{ route('bcab')}}">Bayar</a></p>
                    </div>
                </div>
            </div>
    </div>
  </section>
  <!-- End Featured Product -->
@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

