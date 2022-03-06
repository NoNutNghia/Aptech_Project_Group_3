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
        <hr class="hr-text mt-6" data-content="RELATED VIRUSES SECTIONS">
        @if($related->isNotEmpty())
            @foreach($related as $related)
                <section>
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5 hovereffect">
                                    <a href="{{route('section.detail', $related->id)}}">
                                        <img class="img-fluid rounded" src="{{asset('storage/' . $related->img )}}" alt="{{$related->name}}" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-5">
                                        <a href="{{route('section.detail', $related->id)}}" class="effect-underline" style="text-decoration: none; position: relative">{{$related->name}}</a>
                                    </h2>
                                    <p class="mt-2">{{$related->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        @else
            <div class="container">
                <h2 class="justify-content-center">No any suggestions</h2>
            </div>
        @endif
    </div>

@endsection
