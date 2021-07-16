@if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin" || Auth::user()->role == "Membership")
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
              <h6 class="h2 text-white d-inline-block mb-0">Topik Diskusi</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forum Diskusi</a></li>
                  <li class="breadcrumb-item"><a href="#">Topik Diskusi</a></li>
                  <li class="breadcrumb-item"><a href="#">Lampiran</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="/forumDiskusi/topikDiskusi/{{ $discussion_topics->codeOfTopic }}" class="btn btn-sm btn-neutral">Kembali</a>
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
            <div class="card-header bg-transparent text-center">
                <b><h1 class="mb-0" style="color:#5e72e4">Lampiran</h2></b><br>
            </div><br>
            @foreach ($attachments as $atc)
                <div class="container-fluid text-center">
                    <br><h2><b><u>{{ $atc->titleOfAttachment }}</u></b></h2><br>
                    <embed type="application/pdf" src="/attachments/{{ $atc->file }}" width="100%" height="600">
                </div>
            @endforeach
            </div>
        </div>
    </div>


@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
@endif
