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
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="/forumDiskusi/topikDiskusi/buatJawaban/{{ $discussion_topics->codeOfTopic }}" class="btn btn-sm btn-neutral">Buat Jawaban</a>
              <a href="/forumDiskusi/topikDiskusi/buatKomentar/{{ $discussion_topics->codeOfTopic }}" class="btn btn-sm btn-neutral">Buat Komentar</a>
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
                <b><h1 class="mb-0" style="color:#5e72e4">{{ $discussion_topics->nameOfTopic }}</h2></b><br>
                <u><b><h3 class="mb-0" style="color: #172b4d">{{ $discussion_topics->categoryOfTopic }}</h4></b></u><br>
                <h5 class="mb-0">{{ $discussion_topics->topicDescription }}</h5>
            </div><br>
            <div class="container">
                <div>
                    <span><i class="fas fa-square" style="color:#5e72e4"></i></span>
                    <span><b>Jawaban</b></span>
                </div>
                <div>
                    <span><i class="fas fa-square" style="color:#172b4d"></i></span>
                    <span><b>Komentar</b></span>
                </div>
            </div>
            <div class="card-body">
                <div class="row icon-examples">
                  @foreach($answers as $a)
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard bg-primary" data-clipboard-text="active-40">
                            <div>
                            <i class="fas fa-map-marker-alt" style="color:#172b4d"></i>
                                <span><h3 style="color:white">{{ $a->codeOfAnswer }}</h3></span>
                            </div>
                            <div>
                                <i class="fas fa-user" style="color:#172b4d"></i>
                                <span><h4 style="color:white">{{ $a->nameOfAnswer }}</h4></span>
                            </div>
                            <div>
                                <span><br></span>
                            </div>
                            <div>
                            <span><h5 style="color:white">{{ $a->filledOfAnswer }}</h4></span>
                            </div>
                        </button>
                    </div>
                  @endforeach
                </div>
            </div>
            <div class="card-body">
                <div class="row icon-examples">
                    @foreach ($comments as $c)
                    <div class="col-lg-4 col-md-100">
                        <button type="button" class="btn-icon-clipboard bg-default" data-clipboard-text="active-40">
                            <div>
                                <i class="fas fa-map-marker-alt"></i>
                                <span><h3 style="color:white"">{{ $c->codeOfComment }}</h3></span>
                            </div>
                            <div>
                                <i class="fas fa-user"></i>
                                <span><h4 style="color:white"">{{ $c->nameOfCommentator }}</h4></span>
                            </div>
                            <div>
                                <span><br></span>
                            </div>
                            <div>
                                <span><h5 style="color:white"">{{ $c->filledComment }}</h4></span>
                            </div>
                        </button>
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
