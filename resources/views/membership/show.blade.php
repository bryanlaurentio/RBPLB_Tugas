@extends('layouts.app')

@section('content')


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Pilih Paket Membership</h1>
                <p>
                  Berikut merupakan paket membership yang tersedia dalam aplikasi profit.in. Dengan berlangganan paket membership, kamu akan mendapatkan fasilitas yang tidak didapatkan oleh
                  pengguna non membership.
                </p>
            </div>
        </div>
        @foreach($membership as $m)
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                            </li>
                            <li class="text-muted text-right">{{ $m->price }}</li>
                        </ul>
                        <a href="#" class="h2 text-decoration-none text-dark">{{ $m->nameOfPackage }}</a>
                        <p class="text-center"><a class="btn btn-success">Beli Paket</a></p>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
  </section>
  <!-- End Featured Product -->
@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
