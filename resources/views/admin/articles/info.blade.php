@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group mb-4">
            <label for="name">
                <strong>Name:</strong>
            </label>
            <input type="text" class="form-control" id="name" name="name" value="{{$article->name}}" disabled>
        </div>
        <div class="form-inline justify-content-start mb-4" >
            <label for="year_originated" class="mr-2">
                <strong>Year originated:</strong>
            </label>
            <input type="number" class="form-control mr-3" style="width: 100px" max="2022" id="year_originated" name="year_originated" value="{{$article->year_originated}}" disabled>
            <label for="number_of_infections" class="mr-2">
                <strong>Number of Infections:</strong>
            </label>
            <input type="number" class="form-control mr-3" id="number_of_infections" name="number_of_infections" value="{{$article->detail->number_of_infections}}" disabled>
            <label for="number_of_death" class="mr-2">
                <strong>Number of Death:</strong>
            </label>
            <input type="number" class="form-control mr-3" id="number_of_death" name="number_of_death" value="{{$article->detail->number_of_death}}" disabled>
        </div>
        <div class="form-inline justify-content-start mb-4">
            <label for="virus_type" class="mr-2">
                <strong>Type of virus:</strong>
            </label>
            <input type="text" class="form-control mr-3" id="name" name="name" value="{{$article->type->type_virus}}" disabled>
            <label for="location_of_origin" class="mr-2">
                <strong>Location of origin:</strong>
            </label>
            <input type="text" class="form-control mr-3" id="location_of_origin" name="location_of_origin" value="{{$article->detail->location_of_origin}}" disabled>
        </div>
        <div class="form-group">
            <label for="description">
                <strong>Description:</strong>
            </label>
            <textarea class="form-control" rows="5" id="description" name="description" disabled>
                {{$article->description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="spread">
                <strong>Spread:</strong>
            </label>
            <textarea class="form-control" rows="10" id="spread" name="spread" disabled>
                {{$article->detail->spread}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="detail_description">
                <strong>Detail Description:</strong>
            </label>
            <textarea class="form-control" rows="10" id="detail_description" name="detail_description" disabled>
                {{$article->detail->detail_description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="precaution_required">
                <strong>Precaution required:</strong>
            </label>
            <textarea class="form-control" rows="10" id="precaution_required" name="precaution_required" disabled>
                {{$article->detail->precaution_required}}
            </textarea>
        </div>
        <div >
            <label for="img">
                <strong>Image present:</strong>
            </label>
            <img src="{{asset('storage/' . $article->img)}}" alt="{{$article->name}}" width="100%">
        </div>
        <div >
            <label for="img_detail">
                <strong>Detail image:</strong>
            </label>
            <img src="{{asset('storage/' . $article->img_detail)}}" alt="{{$article->name}}" width="100%">
        </div>
        <div >
            <label for="img_precaution">
                <strong>Precautions image:</strong>
            </label>
            <img src="{{asset('storage/' . $article->img_precaution)}}" alt="{{$article->name}}" width="100%">
        </div>
        <a href="{{route("articles.index")}}" role="button" class="btn btn-info mt-2">OK</a>
    </div>
@endsection
