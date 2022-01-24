@extends('layouts.user')

@section('content')
        <div id="carousel" class="carousel slide" data-ride="carousel" style="margin: 0 80px">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid"
                         src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
                         alt=""
                         style="width: 1296px; height: 645px"
                    >
                </div>
                <div class="carousel-item ">
                    <img class="img-fluid"
                         src="https://jes.edu.vn/wp-content/uploads/2017/10/h%C3%ACnh-%E1%BA%A3nh.jpg"
                         alt=""
                         style="width: 1296px; height: 645px"
                    >
                </div>

            </div>

        </div>
    @foreach($articles as $article)
        @if($loop->index % 2 === 0)
            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
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
            <section>
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
