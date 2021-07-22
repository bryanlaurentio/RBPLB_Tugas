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
                <li class="breadcrumb-item"><a href="#">Bukti Pembayaran</a></li>
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
            <h2 class="mb-0">Bukti Pembayaran</h2>
          </div>
          <div class="card-body">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <h2 class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></h2>
                  @endif
                @endforeach
              </div>
            <div class="row icon-examples">
                @foreach ($payments as $m)
                <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('admin.displayHalamanDetailPayment', $m->codeOfPayment) }}'">
                        <div>
                            <i class="ni ni-chart-bar-32"></i>
                           <span><h3>Nama: {{ $m->name }}</h3></span>
                        </div>
                        <div class = "col">
                            <span><br></span>
                        </div>
                        <div class = "col">
                            <h5>Email: {{ $m->email }} </h4>
                        </div>
                        <div class = "col">
                            <h5>Nama Bank: {{ $m->nameOfBank }}</h4>
                        </div>
                        <div class = "col">
                            <h5>Atas Nama: {{ $m->nameOfBankAccount }}</h4>
                        </div>
                    </button>
                </div>
                @endforeach
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="{{ $payments -> previousPageUrl() }}" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="{{ $payments -> nextPageUrl() }}">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>


@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
