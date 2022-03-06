@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="info-table">
            <div class="form-inline justify-content-end mb-3">
                <form class="form-inline" method="GET" action="{{route('users.search')}}">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search user..." name="search" aria-label="Search" required>
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
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
                    @if($users->isNotEmpty())
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
                    @else
                        <tr>
                            <td colspan="4">
                                <h3>Can not find user</h3>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                    <div>
                        {{$users->links()}}
                    </div>
                </table>

            </div>
        </div>
    </div>

@endsection
