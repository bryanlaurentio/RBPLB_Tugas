@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Here a list of Material') }}</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead style = "text-align: center">
                                    <td>Category</td>
                                    <td>Title</td>
                                    <td>Tutor</td>
                                    <td>Link</td>
                                </thead>
                                <body>
                                    @foreach ($materials as $material)
                                        <tr>
                                            <td class="inner-table">{{ $material->categoryMaterial }}</td>
                                            <td class="inner-table">{{ $material->titleOfMaterial }}</td>
                                            <td class="inner-table">{{ $material->nameOfTutor }}</td>
                                            <td class="inner-table">{{ $material->linkVideo }}</td>
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
