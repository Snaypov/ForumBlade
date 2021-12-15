@extends('layouts.app')

@section('content')

    <form action="{{ route('login.user') }}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                <div class="alert-danger"> {{ $errors->first('email') }} </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                <div class="alert-danger"> {{ $errors->first('password') }} </div>
            </div>
            <button style="margin-top: 5px" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
