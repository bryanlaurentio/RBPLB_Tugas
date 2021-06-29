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
                    <h6 class="h2 text-white d-inline-block mb-0">Edit Topik Diskusi</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Forum Diskusi</a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Topik Diskusi</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('forumDiskusi') }}" class="btn btn-sm btn-neutral">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div><br>

{{-- content --}}
<div class="container">
    <form action="/forumDiskusi/editTopikDiskusi/updateTopikDiskusi/{{ $discussion_topics->codeOfTopic }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="nameOfTopic" class="col-sm-2 col-form-label"><b>Name Of Topic</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default" id="nameOfTopic"  name="nameOfTopic" value="{{ $discussion_topics->nameOfTopic }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="categoryOfTopic" class="col-sm-2 col-form-label"><b>Category Of Topic</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-alternative bg-default" id="categoryOfTopic" name="categoryOfTopic" value="{{ $discussion_topics->categoryOfTopic }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="topicDescription" class="col-sm-2 col-form-label"><b>Description Topic</b></label>
            <div class="col-sm-10">
                <textarea class="form-control form-control-alternative bg-default" rows="3" id="topicDescription" name="topicDescription" value="{{ $discussion_topics->topicDescription }}" required>{{ $discussion_topics->topicDescription }}</textarea>
            </div>
        </div><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-icon btn-3 btn-primary" type="submit">
                <span class="btn-inner--icon"><i class="fas fa-paper-plane"></i></span>
                <span class="btn-inner--text">Update Topik Diskusi</span>
            </button>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
