@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Re-Verify your email address') }}</div>
                    <div class="card-body">
                        <form action="{{ route('re-verify.user'), }}" method="post">
                            @csrf
                            <div class="container">
                                <div class="row mb-3">
                                    <span for="email">Email</span>
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    @if($errors)
                                    <div class="alert-danger"> {{ $errors->first('email') }} </div>
                                    @endif
                                </div>
                                <div class="row mb-0">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
