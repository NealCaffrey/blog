@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <h3>{{ $article->title }}</h3>
            <div>
                {{ $article->content }}
            </div>
        </div>
    </div>
@stop