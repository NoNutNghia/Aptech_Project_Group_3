@extends('layouts.app')

@section('content')
<h1>Danh sach bai viet:</h1>
@foreach($articles as $article)
    <div>
        {{ $article->name }}
    </div>
@endforeach

@endsection
