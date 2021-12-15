@extends('layouts.app')

@section('content')
    <form action="{{ route('register.user') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username">
                <div class="alert-danger"> {{ $errors->first('name') }} </div>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                       placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                <div class="alert-danger"> {{ $errors->first('email') }} </div>
            </div>
            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input type="text" class="form-control" name="nickname" id="exampleInputPassword1"
                       placeholder="Nickname">
                <div class="alert-danger"> {{ $errors->first('nickname') }} </div>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" name="photo" placeholder="photo">
                <div class="alert-danger"> {{ $errors->first('photo') }} </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="alert-danger"> {{ $errors->first('password') }} </div>

            </div>
            <button style="margin-top: 5px" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection


{{--@error('password')--}}
{{--<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
{{--@enderror--}}

{{--<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>--}}
