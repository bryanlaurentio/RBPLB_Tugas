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
                    <h6 class="h2 text-white d-inline-block mb-0">Forum Diskusi</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Forum Diskusi</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('forumDiskusi.createDiscussionTopic') }}" class="btn btn-sm btn-neutral">Buat Topik Diskusi</a>
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
                        <th scope="col">Name Of Topic</th>
                        <th scope="col">Category Of Topic</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($discussion_topics as $dt)
                        <tr>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $dt->nameOfTopic }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="media-body">
                                    <span class="mb-0 text-sm">{{ $dt->categoryOfTopic }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/forumDiskusi/topikDiskusi/{{ $dt->codeOfTopic }}">
                                        <button class="btn btn-primary btn-sm" type="button">Masuk</button>
                                    </a>
                                    <a href="">
                                        <button class="btn btn-warning btn-sm" type="button">Edit</button>
                                    </a>
                                    <a href="">
                                        <button class="btn btn-danger btn-sm" type="button">Hapus</button>
                                    </a>
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
