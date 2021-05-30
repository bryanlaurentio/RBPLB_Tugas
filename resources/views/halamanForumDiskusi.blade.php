@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Here a list of Discussion Topic') }}</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead style = "text-align: center">
                                    <td>Code Of Topic</td>
                                    <td>Name Of Topic</td>
                                    <td>Category Of Topic</td>
                                    <td>Topic Description</td>
                                    <td>Option</td>
                                </thead>
                                <body>
                                    @foreach ($discussion_topics as $discussion_topic)
                                        <tr>
                                            <td class="inner-table">{{ $discussion_topic->codeOfTopic }}</td>
                                            <td class="inner-table">{{ $discussion_topic->nameOfTopic }}</td>
                                            <td class="inner-table">{{ $discussion_topic->categoryOfTopic }}</td>
                                            <td class="inner-table">{{ $discussion_topic->topicDescription }}</td>
                                            <td >
                                                <a href="/discussionTopic/detail/{{ $discussion_topic->codeOfTopic }}">
                                                    <button type="button" class="btn btn-primary">Masuk</button>
                                                </a>
                                                <a href="/discussionTopic/edit/{{ $discussion_topic->codeOfTopic }}">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </a>
                                                <a href="/discussionTopic/delete/{{ $discussion_topic->codeOfTopic }}">
                                                    <button type="button" class="btn btn-primary">Hapus</button>
                                                </a>
                                            </td>
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
