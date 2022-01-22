@extends('layouts.app')

@section('content')
    <div class="container">
        @if($users->count() == 0)
            <h2>No feedback from users</h2>
        @endif
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
    </div>
@endsection
