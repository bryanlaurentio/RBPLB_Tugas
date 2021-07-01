@extends('layouts.app')

@section('content')
{{-- kepala --}}

<div class="header bg-primary pb-4">
    <div class="container-fluid">
       <div class="header-body">
          <br>
          <br>
          <br>
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Live Tutor</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('liveTutor') }}">Live Tutor </a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Live Tutor</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('liveTutor') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- content --}}
<div class="container">
    <form action="{{ route('liveTutor.displayHalamanEditLiveTutor.editLiveTutor', $LiveTutor->codeLiveTutor) }}" method = "POST">
        @method("patch")
        @csrf
        <div class="mb-3 row">
            <label for="nameOfLiveTutor" class="col-sm-2 col-form-label"><b>Nama Live Tutor</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $LiveTutor->nameOfLiveTutor }}" class="form-control form-control-alternative bg-default btn-default" id="nameOfLiveTutor"  name="nameOfLiveTutor" placeholder="Judul Live Tutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nameOfTutorInLiveTutor" class="col-sm-2 col-form-label"><b>Nama Tutor</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $LiveTutor->nameOfTutorInLiveTutor }}" class="form-control form-control-alternative bg-default btn-default" id="nameOfTutorInLiveTutor" name="nameOfTutorInLiveTutor" placeholder="Nama Tutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dateLiveTutor" class="col-sm-2 col-form-label"><b>Tanggal Live Tutor</b></label>
            <div class="col-sm-10">
                <input type="datetime-local" value = "{{ $LiveTutor->dateLiveTutor }}" class="form-control form-control-alternative bg-default" id="dateLiveTutor" name="dateLiveTutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="durationLiveTutor" class="col-sm-2 col-form-label"><b>Durasi Live Tutor</b></label>
            <div class="col-sm-10">
                <input type="number" value = "{{ $LiveTutor->durationLiveTutor}}" class="form-control form-control-alternative bg-default" id="durationLiveTutor" placeholder="Tuliskan Durasi Live Tutor" name="durationLiveTutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="statusLiveTutor" class="col-sm-2 col-form-label"><b>Status Live Tutor</b></label>
            <div class="col-sm-10">
                <input type="string" value = "{{ $LiveTutor->statusLiveTutor}}" class="form-control form-control-alternative bg-default" id="statusLiveTutor" placeholder="Ada/Akan Datang" name="statusLiveTutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="linkLiveTutor" class="col-sm-2 col-form-label"><b>Link Live Tutor</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $LiveTutor->linkLiveTutor }}" class="form-control form-control-alternative bg-default btn-default" id="linkLiveTutor" name="linkLiveTutor" placeholder="Link Live Tutor" required>
            </div>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                <span class="btn-inner--text">Simpan Live Tutor</span>
            </button>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
