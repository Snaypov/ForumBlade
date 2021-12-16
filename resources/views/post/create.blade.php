@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('posts.store', Auth::id()) }}" method="post">
                            @csrf
                            <div class="container">
                                <div class="row mb-3">
                                    <span for="title">Title</span>
                                    <input type="text" name="title" placeholder="Enter your question">
                                    @if($errors)
                                        <div class="alert-danger"> {{ $errors->first('title') }} </div>
                                    @endif
                                </div>
                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
