@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="info-table">
            <a href="{{route('articles.create')}}" class="btn btn-info mb-4" role="button">Create article</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="text-align: center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td style="word-wrap: break-word; max-width: 160px">{{$article->name}}</td>
                            <td style="word-wrap: break-word; max-width: 160px">{{$article->description}}</td>
                            <td style="word-wrap: break-word; max-width: 160px">{{$article->img}}</td>
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
                    </tbody>
                    <div>
                        {{$articles->links()}}
                    </div>
                </table>

            </div>
        </div>
    </div>

@endsection
