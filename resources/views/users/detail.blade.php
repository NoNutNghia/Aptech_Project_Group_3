@extends('layouts.user')

@section('content')
    <div class="container">
        <img class="img-fluid rounded"
             src="{{asset('storage/' . $article->img)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <div id="short_present" class=" mt-3">
            <h3>Some information about virus:</h3>
            <ul style="padding: 0; list-style: none">
                <li> - Name: {{$article->name}}</li>
                <li> - Family: {{$article->type->type_virus}}</li>
                <li> - Location of origin: {{$article->detail->location_of_origin}}</li>
                <li> - Year originated: {{$article->year_originated}}</li>
            </ul>
        </div>
        <div id="detail" class="mt-3">
            <h3>Detail information:</h3>
            <p class="">{!! nl2br(e($article->detail->detail_description))!!}</p>
        </div>
        <img class="img-fluid rounded"
             src="{{asset('storage/' . $article->img_detail)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <div id="spread" class="mt-3">
            <h3>Spread research of virus: </h3>
            <p>{!! nl2br(e($article->detail->spread)) !!}</p>
        </div>
        <h3>Some data about damage caused by virus: </h3>
        <div style="width: 100%" class="card rounded">
            {!! $chart->container() !!}
        </div>
        <img class="img-fluid mt-3 rounded"
             src="{{asset('storage/' . $article->img_precaution)}}"
             alt=""
             style="width: 1296px; height: 645px"
        >
        <div id="precaution" class="mt-3">
            <h3>Precaution required: </h3>
            <p>{!! nl2br(e($article->detail->precaution_required)) !!}</p>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $chart->script() !!}
    </div>

@endsection
