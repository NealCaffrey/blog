@extends('layouts.default')
@section('title', $article->title)

@section('content')
    <div id="show">
        <h3 class="text-center">{{ $article->title }}</h3>
        <h6 class="text-center mt-3">
            <i class="fa fa-align-left text-muted"></i>
            <a href="{{ route('category.show', $article->category->title) }}">{{ $article->category->title }}</a>

            <i class="fa fa-eye ml-3"></i>
            <span>{{ $article->visits }}</span>
            <span class="ml-3">{{ $article->created_at }}</span>
        </h6>
        <div id="article-show">
            {{ $article->content }}
        </div>
        <div id="article-footer">
            <i class="fa fa-thumbs-up"></i>
            <span>{{ $article->star }}</span>
        </div>
    </div>
@stop
