@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>CREATE ARTICLE VIRUS FORM</h2>
        <p>You must fill out all input about the article below:</p>
        <form action="{{route('articles.store')}}" class="was-validated" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name of virus" name="name" required>
            </div>
            <div class="form-inline justify-content-between mb-4" >
                <label for="year_originated">Year originated:</label>
                <input type="number" class="form-control col-1" id="year_originated" name="year_originated" required>
                <label for="number_of_infections">Number of Infections (At this time):</label>
                <input type="number" class="form-control" id="number_of_infections" name="number_of_infections" required>
                <label for="number_of_death">Number of Death (At this time):</label>
                <input type="number" class="form-control" id="number_of_death" name="number_of_death" required>
            </div>
{{--            <div class="form-inline mb-4">--}}
{{--                <label for="virus_type" class="mr-3">Type of virus: </label>--}}
{{--                <select name="virus_type" class="custom-select col-3">--}}
{{--                    <option value="volvo">Volvo</option>--}}
{{--                    <option value="fiat">Fiat</option>--}}
{{--                    <option value="audi">Audi</option>--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="location_of_origin">Location of origin:</label>
                <input type="text" class="form-control" id="location_of_origin" placeholder="Location of origin" name="location_of_origin" required>
            </div>
            <div class="form-group">
                <label for="spread">Way to spread:</label>
                <textarea class="form-control" rows="3" id="spread" name="spread" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" rows="3" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="precaution_required">Precaution required:</label>
                <textarea class="form-control" rows="5" id="precaution_required" name="precaution_required" required></textarea>
            </div>
{{--            <p>Upload image: </p>--}}
{{--            <div class="custom-file mb-3 ">--}}
{{--                <input type="file" class="custom-file-input" id="customFile">--}}
{{--                <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
