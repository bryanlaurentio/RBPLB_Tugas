@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{ __('Enter Details to create a Discussion Topic') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ config('app.url')}}/formCreateDiscussionTopic/create" >
                            @csrf
                            <div class="form-group row">
                                <label for="nameOfTopic" class="col-md-4 col-form-label text-md-right">{{ __('Name Of Topic') }}</label>
                                <div class="col-md-6">
                                <input type="text" id="nameOfTopic" name="nameOfTopic" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="categoryOfTopic" class="col-md-4 col-form-label text-md-right">{{ __('Category Of Topic') }}</label>
                                <div class="col-md-6">
                                <input type="text" id="categoryOfTopic" name="categoryOfTopic" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="topicDescription" class="col-md-4 col-form-label text-md-right">{{ __('Topic Description') }}</label>
                                <div class="col-md-6">
                                <input type="text" id="topicDescription" name="topicDescription" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
