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
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Role</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Admin </a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Role</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- content --}}
<div class="container">
    <form action="{{ route('admin.displayHalamanEditRole.editRole', $users->id) }}" method = "POST">
        @method("patch")
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label"><b>Nama</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $users->name }}" class="form-control form-control-alternative bg-default btn-default" id="name"  name="name" placeholder="Nama Akun" readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
            <div class="col-sm-10">
                <input type="text" value = "{{ $users->email }}" class="form-control form-control-alternative bg-default btn-default" id="email" name="email" placeholder="Email Akun" readonly>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label"><b>Role</b></label>
            <div class="col-sm-10">
                    <select class="form-control form-control-alternative bg-default btn-default" data-toggle="select" data-minimum-results-for-search="Infinity" name = "role" id = "role">
                        <option value = "Membership">Membership</option>
                        <option value = "Non Membership">Non Membership</option>
                        <option value = "Admin">Admin</option>
                        <option value = "Tutor">Tutor</option>
                    </select>
            </div>
        </div><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                <span class="btn-inner--text">Simpan</span>
            </button>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
