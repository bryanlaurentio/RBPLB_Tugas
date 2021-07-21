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
                <li class="breadcrumb-item"><a href="#">Live Tutor Requested</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('liveTutor') }}" class="btn btn-sm btn-neutral">Kembali</a>
        </div>
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
            <h4 class="mb-0">Berikut beberapa permintaan Live Tutor dari Pengguna Membership!</h4>
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
                @foreach($RequestLiveTutor as $rlt)
                <div class="col-lg-12 col-md-100">
                    @if(Auth::user()->role == "Non Membership" || Auth::user()->role == "Membership" || Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40">
                    @endif
                        <div>
                            <i class="ni ni-chart-bar-32"></i>
                             <span><h3>{{ $rlt->nameOfLiveTutor }}</h3></span>
                        </div>
                        <div class = "col">
                            <span><br></span>
                        </div>
                        <div>
                            <h5>Tanggal Permintaan Live Tutor : {{ $rlt->dateLiveTutor }} </h4>
                        </div>
                    </button>
                    {{--
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <form>
                            @csrf
                            <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Terima" />
                        </form>
                        <span>&nbsp &nbsp</span>
                        <form>
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-icon btn-3 btn-danger" onclick="return confirm('Apakah anda yakin ingin menolak Request Live Tutor {{$rlt->nameOfLiveTutor}}?')" type="submit" value="Tolak" />
                        </form>
                        @endif
                    </div>
                    --}}
                </div>
                @endforeach
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="{{ $RequestLiveTutor -> previousPageUrl() }}" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="{{ $RequestLiveTutor -> nextPageUrl() }}">
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
