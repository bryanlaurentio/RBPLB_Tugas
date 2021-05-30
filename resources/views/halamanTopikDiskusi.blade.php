@extends('layouts.app')

@section('content')
    <div class="container">
        @if(!is_null($discussion_topics))
            <div class="text-center">
                <h1><b>{{ $discussion_topics->nameOfTopic }}</b></h6>
                <h4><i>{{ $discussion_topics->categoryOfTopic }}</i></h2>
                <p>{{ $discussion_topics->topicDescription }}</p>
            </div><br>
        @endif
        <div class="text-center">
            <h3><b>Jawaban</b></h3>
            <div>
                <a href="/answer/{{ $discussion_topics->codeOfTopic }}">
                    <button type="button" class="btn btn-primary">Buat Jawaban</button>
                </a>
            </div><br>

            <table class="table">
                <thead>
                    <td>Code Of Answer</td>
                    <td>Name Of Answer</td>
                    <td>Filled Answer</td>
                </thead>
                <body>
                    @foreach ($answers as $answer)
                        <tr>
                            <td class="inner-table">{{ $answer->codeOfAnswer }}</td>
                            <td class="inner-table">{{ $answer->nameOfAnswer }}</td>
                            <td class="inner-table">{{ $answer->filledOfAnswer }}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div><br>
        <div class="text-center">
            <h3><b>Komentar</b></h3>
            <div>
                <a href="/comment/{{ $discussion_topics->codeOfTopic }}">
                    <button type="button" class="btn btn-primary">Buat Comment</button>
                </a>
            </div><br>

            <table class="table">
                <thead>
                    <td>Code Of Comemnt</td>
                    <td>Name Of Commentator</td>
                    <td>Filled Comment</td>
                </thead>
                <body>
                    @foreach ($comments as $comment)
                        <tr>
                            <td class="inner-table">{{ $comment->codeOfComment }}</td>
                            <td class="inner-table">{{ $comment->nameOfCommentator }}</td>
                            <td class="inner-table">{{ $comment->filledComment }}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>
@endsection
