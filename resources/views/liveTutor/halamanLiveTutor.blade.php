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
                    <h6 class="h2 text-white d-inline-block mb-0">Live Tutor</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Live Tutor</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">Request Live Tutor</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table align-items-center table-dark text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Materi</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($LiveTutor as $lt)
                        <tr>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $lt->nameOfLiveTutor }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $lt->nameOfTutorInLiveTutor }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $lt->statusLiveTutor }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" type="button">Masuk</button>
                                    <button class="btn btn-primary" type="button">Edit</button>
                                    <button class="btn btn-primary" type="button">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
