@extends('layouts.app')

@section('content')
{{-- kepala --}}

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
          <br>
          <br>
          <br>
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Live Tutor</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('liveTutor') }}">Live Tutor</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Live Tutor</a></li>
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
            <h2 class="mb-0" style="text-align: center">{{ $LiveTutor->nameOfLiveTutor }}</h2>
            <h2 class="mb-0" style="text-align: center">Presented by: {{ $LiveTutor->nameOfTutorInLiveTutor }}</h2>
          </div>
          <div class="card-body" style="text-align: center">
            <p style="text-align:center;">
                <iframe width="850" height="550" align="middle" src="{{ $LiveTutor->linkLiveTutor }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
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
