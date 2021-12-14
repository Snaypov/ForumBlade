@extends('layouts.app')

@section('content')
    <form action="{{ route('register.user') }}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                @error('username')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="exampleInputPassword1">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputPassword1"
                       placeholder="Username">
            </div>
            <div class="form-group">
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                @error('nickname')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="exampleInputPassword1">Nickname</label>
                <input type="text" class="form-control" name="nickname" id="exampleInputPassword1"
                       placeholder="Nickname">
            </div>
            <div class="form-group">
                @error('photo')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="exampleInputPassword1">Photo</label>
                <input type="file" class="form-control" name="photo" id="exampleInputPassword1"
                       placeholder="photo">
            </div>
            <div class="form-group">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
            <button style="margin-top: 5px" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
