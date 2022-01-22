@extends('layouts.user')

@section('content')
    <div class="container">
        <h2>GIVE ME YOUR FEEDBACK</h2>
        <form action="{{route('feedback.store')}}" class="was-validated" method="POST">
            @csrf
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" rows="4" id="feedback" name="feedback" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
