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
            <h6 class="h2 text-white d-inline-block mb-0">Bukti Pembayaran</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.displayHalamanMembershipAdmin') }}">Admin</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Pembayaran</a></li>
              </ol>
            </nav>
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
            <h2>Detail Pembayaran</h2>
          </div>
          <div class="card-body" style="text-align: center">
            <h2 class="mb-0" style="text-align: center">Username: {{ $payment->name }}</h2>
            <h2 class="mb-0" style="text-align: center">Email: {{ $payment->email }}</h2>
            <h2 class="mb-0" style="text-align: center">Bank: {{ $payment->nameOfBank }}</h2>
            <h2 class="mb-0" style="text-align: center">Atas Nama: {{ $payment->nameOfBankAccount }}</h2>
            <h2 class="mb-0" style="text-align: center">Bank: {{ $payment->nameOfBank }}</h2>
            <br>
            <img type="application/pdf" src="/{{ asset ( 'paymentReceipt') }}/{{ $payment->paymentReceipt }}" width="100%" height="600" alt='sasa'>
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
