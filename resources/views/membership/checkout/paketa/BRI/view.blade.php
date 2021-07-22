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
                            <li class="breadcrumb-item"><a href="{{ route('checkouta') }}">Halaman Checkout</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('bria') }}">BRI</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('checkouta') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

{{-- content --}}
            <h1 class="text-black text-center">{{ __('Pembayaran') }}</h1>
            <p class="text-center">Pastikan kamu telah melakukan pembayaran di ke BRI VA: 1000000002!</p>
            <p class="text-center">Tagihan : Rp100.000,-</p>
            <br>

<div class="container">
    <form action="{{ route('storebank') }}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"><b>Nama</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default btn-default" value="{{ old('name', auth()->user()->name) }}" id="name"  name="name" placeholder="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"><b>Email</b></label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-alternative bg-default btn-default" value="{{ old('email', auth()->user()->email) }}" id="email"  name="email" placeholder="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"><b>Nama Bank</b></label>
            <div class="col-sm-10">
                    <select class="form-control form-control-alternative bg-default btn-default" id="nameOfBank" name="nameOfBank" data-toggle="select" data-minimum-results-for-search="Infinity" name = "categoryUser" id = "categoryUser">
                        <option value ="BRI">BRI</option>
                    </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"><b>Nama Akun Bank</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default btn-default" id="nameOfBankAccount"  name="nameOfBankAccount" placeholder="bank account" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="linkVideo" class="col-sm-2 col-form-label"><b>Unggah Bukti Pembayaran</b></label>
            <div class="col-sm-10">
                <input type="file" class="form-control form-control-alternative bg-default btn-default" id="paymentReceipt" name="paymentReceipt" placeholder="payment receipt" required>
            </div>
        </div><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--text">Bayar</span>
            </button>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
