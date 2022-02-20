@extends('layouts.user')

@section('content')
    @foreach($articles as $article)
        <h2 style="color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 80px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;">
            {{$article->year_originated}}</h2>
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5 hovereffect">
                            <a href="{{route('section.detail', $article->id)}}">
                                <img class="img-fluid rounded" src="{{asset('storage/' . $article->img )}}" alt="{{$article->name}}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-5">
                                <a href="{{route('section.detail', $article->id)}}" class="effect-underline" style="text-decoration: none; position: relative">{{$article->name}}</a>
                            </h2>
                            <p class="mt-2">{{$article->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
