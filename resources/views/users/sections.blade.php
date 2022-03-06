@extends('layouts.user')

@section('content')
    <video autoplay loop muted id="myVideo">
        <source
            src="{{asset('storage/Covid-19 Novel Corona Virus Animated background .mp4')}}"
            type="video/mp4">
    </video>
        {{--    Slider images--}}
    <div id="carousel" class="carousel slide" data-ride="carousel" style="margin: 0 80px">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                @if($loop->index == 0)
                    <div class="carousel-item active">
                        <img class="img-fluid"
                             src="{{asset('storage/' . $slider->img)}}"
                             alt=""
                             style="width: 1296px; height: 645px"
                        >
                    </div>
                @else
                    <div class="carousel-item ">
                        <img class="img-fluid"
                             src="{{asset('storage/' . $slider->img)}}"
                             alt=""
                             style="width: 1296px; height: 645px"
                        >
                    </div>
                @endif
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--                End slider image--}}
    <div class="container">
        <hr class="hr-text mt-6" data-content="SOME KINDS OF VIRUSES">
        @foreach($articles as $article)
            @if($loop->index % 2 === 0)
                <section>
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5 hovereffect">
                                    <a href="{{route('section.detail', $article->id)}}">
                                        <img class="img-fluid rounded" src="{{asset('storage/' . $article->img )}}"
                                             alt="{{$article->name}}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-5"><strong>
                                        <a href="{{route('section.detail', $article->id)}}" class="effect-underline"
                                           style="text-decoration: none; position: relative">{{$article->name}}</a></strong>
                                    </h2>
                                    <a href="{{route('section.tag', $article->year_originated)}}"
                                       class="btn btn-outline-primary btn-sm"
                                       role="button">{{$article->year_originated}} </a>
                                    <a href="{{route('section.tag', $article->type->type_virus)}}"
                                       class="btn btn-outline-primary btn-sm"
                                       role="button">{{$article->type->type_virus}} </a>
                                    <p class="mt-2 blockquote">{!! nl2br(e($article->description)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section>
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div class="p-5 hovereffect">
                                    <a href="{{route('section.detail', $article->id)}}">
                                        <img class="img-fluid rounded" src="{{asset('storage/' . $article->img)}}"
                                             alt="{{$article->name}}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h2 class="display-5"><strong>
                                        <a href="{{route('section.detail', $article->id)}}" class="effect-underline"
                                           style="text-decoration: none; position: relative">{{$article->name}}</a></strong>
                                    </h2>
                                    <a href="{{route('section.tag', $article->year_originated)}}"
                                       class="btn btn-outline-primary btn-sm"
                                       role="button">{{$article->year_originated}} </a>
                                    <a href="{{route('section.tag', $article->type->type_virus)}}"
                                       class="btn btn-outline-primary btn-sm"
                                       role="button">{{$article->type->type_virus}} </a>
                                    <p class="mt-2 blockquote">{{$article->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
        <div class="d-flex justify-content-center">
            {{$articles->links()}}
        </div>
    </div>
@endsection
