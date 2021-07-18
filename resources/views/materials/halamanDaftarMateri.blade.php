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
                <li class="breadcrumb-item"><a href="#">Materi</a></li>
              </ol>
            </nav>
          </div>
          @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('materials.displayHalamanUploadMateri') }}" class="btn btn-sm btn-neutral">Upload Materi</a>
          </div>
          @endif
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
            <h2 class="mb-0">Materi</h2>
            <h4 class="mb-0">Materi-materi yang tersaji dibawah ini sangat cocok untuk kalian yang mau terjun ke dunia investasi!</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('materials.searchMaterial') }}" method = "GET">
            <div class="input-group row">
                <div class="col-4">
                <input type="search" name="search" class="form-control rounded mr-sm-2" placeholder="Cari Materi Berdasarkan Judul, Tutor, atau Kategori" aria-label="Search"
                  aria-describedby="search-addon" value="{{ old('search') }}" >
                </div>
                  <div class="col-2">
                <button type="submit" class="btn btn-outline-primary" value="search">Cari</button>
                </div>
            </div>
            </form>
            <br>
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <h2 class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></h2>
                  @endif
                @endforeach
              </div>
            <div class="row icon-examples">
                @foreach ($materials as $m)
                <div class="col-lg-4 col-md-100">
                    @if(Auth::user()->role == "Non Membership" &&  $m->categoryUser == "Non Membership" )
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('materials.displayHalamanDetailMateri', $m->codeOfMaterial) }}'">
                    @endif
                    @if(Auth::user()->role == "Non Membership" && $m->categoryUser == "Membership" )
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('membership') }}'">
                    @endif
                    @if(Auth::user()->role == "Membership" ||Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" onclick= "location.href='{{ route('materials.displayHalamanDetailMateri', $m->codeOfMaterial) }}'">
                    @endif
                        <div>
                            <i class="ni ni-chart-bar-32"></i>
                           <span><h3>Judul: {{ $m->titleOfMaterial }}</h3></span>
                        </div>
                        <div class = "col">
                            <span><br></span>
                        </div>
                        <div class = "col">
                            <h5>Tutor: {{ $m->nameOfTutor }} </h4>
                        </div>
                        <div class = "col">
                            <h5>User: {{ $m->categoryUser }}</h4>
                        </div>
                        <div class = "col">
                            <h5>Kategori: {{ $m->categoryMaterial }}</h4>
                        </div>
                    </button>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        @if(Auth::user()->role == "Tutor" || Auth::user()->role == "Admin")
                        <form action="{{ route('materials.displayHalamanEditMateri', $m->codeOfMaterial)}}">
                            @csrf
                            <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                        </form>
                        <span>&nbsp &nbsp</span>
                        {{-- <form action="{{ route('materials.deleteMaterial', $m->codeOfMaterial)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Delete{{ $m->codeOfMaterial }} </button>
                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="exampleModalLabel">Konfirmasi {{ $m->codeOfMaterial }}</h1>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <h2>Apakah Anda yakin ingin menghapus materi {{ $m->titleOfMaterial }}?</h2>
                                      </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type = "submit" class="btn btn-icon btn-3 btn-primary">Delete</button>
                                  </div>
                                </div>
                                </div>
                              </div>
                        </form> --}}
                        <form action="{{ route('materials.deleteMaterial', $m->codeOfMaterial)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-icon btn-3 btn-primary" onclick="return confirm('Apakah anda yakin ingin menghapus materi {{$m->titleOfMaterial}}?')" type="submit" value="Delete" />
                        </form>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="{{ $materials -> previousPageUrl() }}" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="{{ $materials -> nextPageUrl() }}">
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
