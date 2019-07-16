@extends('layouts.default')
@section('title', $article->title)

@section('content')
    <div id="show">
        <h3 class="text-center">{{ $article->title }}</h3>
        <h6 class="text-center mt-3">
            <i class="fa fa-align-justify text-success"></i>
            <a href="{{ route('category.show', $article->category->title) }}">{{ $article->category->title }}</a>
            <span class="ml-3">{{ $article->created_at }}</span>
        </h6>
        <div id="article-show">
            {{ $article->content }}
        </div>
        <div class="mt-4">
            <a href="{{ route('article.tag', $article->tag) }}" class="tag">{{ $article->tag }}</a>
            <span class="float-right mr-4">
                <i class="fa fa-eye text-success"></i>
                <span>{{ $article->visits }}</span>
            </span>
        </div>
    </div>
@stop