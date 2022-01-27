@extends('layouts.user')

@section('content')
    <div class="container">
        <div>
            {{$article->name}}
        </div>
        <div>
            {{$article->description}}
        </div>
        <div>
            {{$article->type->type_virus}}
        </div>
        <div>
            {{$article->year_originated}}
        </div>
        <img class="img-fluid"
             src="{{asset('storage/' . $article->img)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <img class="img-fluid"
             src="{{asset('storage/' . $article->img_precaution)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <img class="img-fluid"
             src="{{asset('storage/' . $article->img_detail)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <div>
            {!! nl2br(e($article->detail->spread)) !!}
        </div>
        <div>
            {{$article->detail->location_of_origin}}
        </div>
        <div>
            {!! nl2br(e($article->detail->detail_description))!!}
        </div>
        <div>
            {!! nl2br(e($article->detail->precaution_required)) !!}
        </div>
        <div>
            {{$article->detail->number_of_infections}}
        </div>
        <div>
            {{$article->detail->number_of_death}}
        </div>
    </div>
@endsection
