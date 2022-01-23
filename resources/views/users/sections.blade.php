@extends('layouts.user')

@section('content')
    <!-- Content section 1-->
    @foreach($articles as $article)
        @if($loop->index % 2 === 0)
            <section id="scroll">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2 " >
                            <div class="p-5 hovereffect">
                                <a href="">
                                    <img class="img-fluid rounded" src="{{asset('storage/' . $article->img)}}" alt="{{$article->name}}" />
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <a href="" style="text-decoration: none">
                                    <h2 class="display-5">{{$article->name}}</h2>
                                </a>
                                <button type="button" class="btn btn-outline-primary btn-sm">{{$article->year_originated}}</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">{{$article->type->type_virus}}</button>
                                <p class="mt-2">{{$article->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="scroll">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6" >
                            <div class="p-5 hovereffect">
                                <a href="" >
                                    <img class="img-fluid rounded" src="{{asset('storage/' . $article->img)}}" alt="{{$article->name}}" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <a href="" style="text-decoration: none">
                                    <h2 class="display-5">{{$article->name}}</h2>
                                </a>
                                <button type="button" class="btn btn-outline-primary btn-sm">{{$article->year_originated}}</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">{{$article->type->type_virus}}</button>
                                <p class="mt-2">{{$article->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach

@endsection
