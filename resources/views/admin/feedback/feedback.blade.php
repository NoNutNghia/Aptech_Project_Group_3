@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-inline justify-content-end mb-3">
            <form class="form-inline" method="GET" action="{{route('feedback.search')}}">
                <input class="form-control mr-sm-2" type="search" placeholder="Search user..." name="search" aria-label="Search" required>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        @if($users->isNotEmpty())
            @foreach($users as $user)
                <div class="mt-3">
                <h4>{{$user->username}} feedback:</h4>
                    <ul class="list-group list-group-flush">
                        @foreach($user->feedback as $feedback)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$feedback->feedback}}
                                <span class="badge badge-primary badge-pill">{{$feedback->created_at->toDateString()}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @else
            <h2>Can not find user</h2>
        @endif
    </div>
@endsection
