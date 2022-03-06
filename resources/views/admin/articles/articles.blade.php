@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="info-table">
            <div class="form-inline justify-content-between mb-3">
                <a href="{{route('articles.create')}}" class="btn btn-info " role="button">Create article</a>
                <form class="form-inline" method="GET" action="{{route('articles.search')}}">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search" required>
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($articles->isNotEmpty())
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td style="word-wrap: break-word; max-width: 160px">{{$article->name}}</td>
                                <td style="word-wrap: break-word; max-width: 160px">{{$article->description}}</td>
                                <td style="max-width: 160px; vertical-align: middle">
                                    <a href="{{route('articles.show', $article->id)}}" class="btn btn-success" role="button">Info <i class="fas fa-info-circle"></i></a>
                                    <a href="{{route('articles.edit', $article->id)}}" class="btn btn-warning" role="button">Edit <i class="fas fa-edit"></i></a>
                                    <form action="{{route('articles.destroy', $article->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger">
                                            Delete <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <h3>Can not find any articles</h3>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                    <div class="">
                        {{$articles->links()}}
                    </div>
                </table>

            </div>
        </div>
    </div>

@endsection
