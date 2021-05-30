@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{ __('Enter Details to create a Comment') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ config('app.url')}}/comment/create" >
                            @csrf
                            <div class="form-group row">
                                <label for="codeOfTopic" class="col-md-4 col-form-label text-md-right">{{ __('Code Of Topic') }}</label>
                                <div class="col-md-6">
                                <input type="number" id="codeOfTopic" name="codeOfTopic" class="form-control" value="{{ $discussion_topics->codeOfTopic }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nameOfCommentator" class="col-md-4 col-form-label text-md-right">{{ __('Name Of Commentator') }}</label>
                                <div class="col-md-6">
                                <input type="text" id="nameOfCommentator" name="nameOfCommentator" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="filledComment" class="col-md-4 col-form-label text-md-right">{{ __('Filled Comment') }}</label>
                                <div class="col-md-6">
                                <input type="text" id="filledComment" name="filledComment" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form><br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/comment/backToDetail/{{ $discussion_topics->codeOfTopic }}">
                                    <button type="button" class="btn btn-primary">
                                        {{ __('Kembali') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
