@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User {{$user->username}} information:</h2>
    <div class="form-group mt-4 form-inline">
        <label for="name">
            <strong>Username: </strong>
        </label>
        <input type="text" class="form-control ml-2" id="username" name="username" value="{{$user->username}}" disabled>
    </div>

    <div class="form-group mt-4 form-inline">
        <label for="email">
            <strong>Email: </strong>
        </label>
        <input type="text" class="form-control ml-2" style="min-width: 300px" id="email" name="email" value="{{$user->email}}" disabled>
    </div>

    <div class="form-group mt-4 form-inline">
        <label for="name">
            <strong>Phone number: </strong>
        </label>
        <input type="text" class="form-control ml-2" id="username" name="username" value="{{$user->phone}}" disabled>
    </div>

    <a href="{{route('users.index')}}" class="btn btn-info" role="button">OK</a>
</div>
@endsection
