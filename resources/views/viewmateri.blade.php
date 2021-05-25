@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Here a list of Materi') }}</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead style = "text-align: center">
                                    <td>Category</td>
                                    <td>Title</td>
                                    <td>Tutor</td>
                                    <td>Link</td>
                                </thead>
                                <body>
                                    @foreach ($materis as $materi)
                                        <tr>
                                            <td class="inner-table">{{ $materi->categoryMateri }}</td>
                                            <td class="inner-table">{{ $materi->titleOfMateri }}</td>
                                            <td class="inner-table">{{ $materi->nameOfTutor }}</td>
                                            <td class="inner-table">{{ $materi->linkVideo }}</td>
                                        </tr>
                                    @endforeach
                                </body>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
