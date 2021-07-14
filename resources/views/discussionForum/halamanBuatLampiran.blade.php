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
                    <h6 class="h2 text-white d-inline-block mb-0">Buat Lampiran</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Forum Diskusi</a></li>
                            <li class="breadcrumb-item"><a href="#">Topik Diskusi</a></li>
                            <li class="breadcrumb-item"><a href="#">Buat Lampiran</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="/forumDiskusi/topikDiskusi/{{ $discussion_topics->codeOfTopic }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- content --}}
<div class="container">
    <form action="forumDiskusi/createAttachment/storeAttachment" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="codeOfTopic" class="col-sm-2 col-form-label"><b>Code Of Topic</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default" id="codeOfTopic" name="codeOfTopic" value="{{ $discussion_topics->codeOfTopic }}" readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="titleOfAttachment" class="col-sm-2 col-form-label"><b>Title</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default" id="titleOfAttachment" placeholder="Tuliskan Judul" name="titleOfAttachment" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="file" class="col-sm-2 col-form-label"><b>File</b></label>
            <div class="col-sm-10">
                <input type="file" class="form-control form-control-alternative bg-default" id="file" placeholder="Lampirkan" name="file" required>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                <span class="btn-inner--text">Upload</span>
            </button>
        </div>
    </form><br><br><br><br><br>
@include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
