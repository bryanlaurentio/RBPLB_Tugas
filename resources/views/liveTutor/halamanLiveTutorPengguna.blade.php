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
                <li class="breadcrumb-item"><a href="#">Live Tutor</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('forumDiskusi.createDiscussionTopic') }}" class="btn btn-sm btn-neutral">Request Live Tutor</a>
        </div>
          {{--<div class="col-lg-6 col-5 text-right">
            <a href="{{ route('materials.displayHalamanUploadMateri') }}" class="btn btn-sm btn-neutral">Upload Materi</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div>--}}
        </div>
      </div>
    </div>
  </div>

{{-- isi --}}
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class=" col ">
        <div class="card">
          <div class="card-header bg-transparent">
            {{--<h2 class="mb-0">Live Tutor</h2>--}}
            <h4 class="mb-0">Ikuti Live Tutor dan dapatkan banyak pengetahuan mengenai dunia saham!</h4>
          </div>
          <div class="card-body">
            <div class="row icon-examples">
                @foreach($LiveTutor as $lt)
                <div class="col-lg-4 col-md-100">
                    <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                        <div>
                            <i class="ni ni-chart-bar-32"></i>
                             <span><h3>Judul: {{ $lt->nameOfLiveTutor }}</h3></span>
                        </div>
                        <div class = "col">
                            <span><br></span>
                        </div>
                        <div class = "col">
                            <h5>Tutor: {{ $lt->nameOfTutorInLiveTutor }} </h4>
                        </div>
                        <div class = "col">
                            <h5>Kategori: {{ $lt->statusLiveTutor }}</h4>
                        </div>
                    </button>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <form action="{{ route('materials.displayHalamanEditMateri', $lt->codeLiveTutor)}}">
                            @csrf
                            <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                        </form>
                        <span>&nbsp &nbsp</span>
                        <form action="{{ route('materials.deleteMaterial', $lt->codeLiveTutor)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Delete" />
                        </form>
                    </div>
                </div>
                @endforeach
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
