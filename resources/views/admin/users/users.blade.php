@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="info-table">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td style="word-wrap: break-word; max-width: 160px">{{$user->username}}</td>
                            <td style="max-width: 160px; vertical-align: middle">
                                <a href="{{route('users.show', $user->id)}}" class="btn btn-success" role="button">Info <i class="fas fa-info-circle"></i></a>
                                <form action="{{route('users.destroy', $user->id)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">
                                        Delete <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <div>
                        {{$users->links()}}
                    </div>
                </table>

            </div>
        </div>
    </div>

@endsection
