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
                <li class="breadcrumb-item"><a href="{{ route('materials') }}">Materi</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Materi</a></li>
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
            <h2 class="mb-0" style="text-align: center">{{ $material->titleOfMaterial }}</h2>
            <h2 class="mb-0" style="text-align: center">Presented by: {{ $material->nameOfTutor }}</h2>
          </div>
          <div class="card-body" style="text-align: center">
                <h2>Materi</h2>
                    <form target="_blank" action="{{$material->fileMaterial}}">
                        @csrf
                        <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Lihat Materi" />
                    </form>
                {{-- <a target="_blank" href = "{{$material->fileMaterial}}}">{{$material->titleOfMaterial}}</a> --}}
                {{-- <embed src="{{$material->fileMaterial}}" width="600" height="500" alt="pdf"/> --}}
            </div>
          <div class="card-body" style="text-align: center">
            <p style="text-align:center;">
                <iframe width="850" height="550" src="{{ $material->linkVideo }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
