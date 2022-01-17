@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>CREATE ARTICLE VIRUS FORM</h2>
        <p>You must fill out all input about the article below:</p>
        <form action="{{route('articles.store')}}" class="was-validated" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name of virus" name="name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
