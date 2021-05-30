@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/discussionTopic/update/{{ $discussion_topics->codeOfTopic }}">
            @csrf
            <div class="mb-3">
                <label for="codeOfTopic" class="form-label">Code Of Topic</label>
                <input type="number" class="form-control" id="codeOfTopic" name="codeOfTopic" value="{{ $discussion_topics->codeOfTopic }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nameOfTopic" class="form-label">Name Of Topic</label>
                <input type="text" class="form-control" id="nameOfTopic" name="nameOfTopic" value="{{ $discussion_topics->nameOfTopic }}" required>
            </div>
            <div class="mb-3">
                <label for="categoryOfTopic" class="form-label">Category Of Topic</label>
                <input type="text" class="form-control" id="categoryOfTopic" name="categoryOfTopic" value="{{ $discussion_topics->categoryOfTopic }}" required>
            </div>
            <div class="mb-3">
                <label for="topicDescription" class="form-label">Topic Description</label>
                <input type="text" class="form-control" id="topicDescription" name="topicDescription" value="{{ $discussion_topics->topicDescription }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ config('app.url')}}/discussionTopic">
                <button type="button" class="btn btn-primary">Kembali</button>
            </a>
        </form>
    </div>
@endsection
