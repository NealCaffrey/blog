@extends('layouts.default')

@section('content')
    <div id="show">
        <h3 class="text-center">{{ $article->title }}</h3>
        <h6 class="text-center">{{ $article->created_at }}</h6>
        <div>
            {{ $article->content }}
        </div>
    </div>
@stop