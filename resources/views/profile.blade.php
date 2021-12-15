@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{$user->id}}
                            <img style="width: 100%; height: 100%;" src="{{$media->getUrl('thumb')}}" alt="">

                        {{--                            <img src="{{ $user->getMedia('uploads')->where('model_id', $user->id)->getUrl() }}>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
