@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}
                        <a style="float: right;" href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>User Name</th>
                                <th>User ID</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td> {{ $item->title }}</td>
                                    <td> {{$item->user->name}}</td>
                                    <td>{{ $item->user->id }}</td>
                                    <td>
                                        @if(Auth::id() == $item->user_id)
                                        <form action="{{ route('posts.edit', $item) }}">
                                            @csrf
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        @endif
                                    </td>
                                    <td>
                                        @if(Auth::id() == $item->user_id)
                                        <form action="{{ route('posts.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-primary">Delete</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
