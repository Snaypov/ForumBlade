@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify your email address') }}</div>
                    <div class="card-body">
                        <p>We sent on your email verification link. Please follow it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
