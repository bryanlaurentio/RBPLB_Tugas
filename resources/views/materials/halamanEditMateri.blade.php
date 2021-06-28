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
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Materi</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Materi </a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Materi</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('materials') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- content --}}
<div class="container">
    <form action="{{ route('materials.displayHalamanEditMateri.editMaterial', $material->codeOfMaterial) }}" method = "POST">
        @method("patch")
        @csrf
        <div class="mb-3 row">
            <label for="titleOfMaterial" class="col-sm-2 col-form-label"><b>Judul</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $material->titleOfMaterial }}" class="form-control form-control-alternative bg-default btn-default" id="titleOfMaterial"  name="titleOfMaterial" placeholder="Judul Materi" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nameOfTutor" class="col-sm-2 col-form-label"><b>Nama Tutor</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $material->nameOfTutor }}" class="form-control form-control-alternative bg-default btn-default" id="nameOfTutor" name="nameOfTutor" placeholder="Nama Tutor" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="linkVideo" class="col-sm-2 col-form-label"><b>Link Video</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $material->linkVideo }}" class="form-control form-control-alternative bg-default btn-default" id="linkVideo" name="linkVideo" placeholder="Link Video" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="categoryUser" class="col-sm-2 col-form-label"><b>Kategori User</b></label>
            <div class="col-sm-10">
                    <select class="form-control form-control-alternative bg-default btn-default" data-toggle="select" data-minimum-results-for-search="Infinity" name = "categoryUser" id = "categoryUser">
                        <option value = "Non Membership">Non Membership</option>
                        <option value = "Membership">Membership</option>
                    </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="categoryMaterial" class="col-sm-2 col-form-label"><b>Kategori Materi</b></label>
            <div class="col-sm-10">
                    <select class="form-control form-control-alternative bg-default btn-default" data-toggle="select" data-minimum-results-for-search="Infinity" name = "categoryMaterial" id = "categoryMaterial">
                        <option value = "Saham">Saham</option>
                        <option value = "Reksadana">Reksadana</option>
                        <option value = "Obligasi">Obligasi</option>
                        <option value = "Cryptocurrency">Cryptocurrency</option>
                        <option value = "Asuransi">Asuransi</option>
                    </select>
            </div>
        </div><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                <span class="btn-inner--text">Simpan Materi</span>
            </button>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
