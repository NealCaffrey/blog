@extends('layouts.default')
@section('title', $article->title)

@section('content')
    <div id="show">
        <h3 class="text-center">{{ $article->title }}</h3>
        <h6 class="text-center">{{ $article->created_at }}</h6>
        <div id="article-show">
            {{ $article->content }}
        </div>
    </div>
@stop