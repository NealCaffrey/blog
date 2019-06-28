@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <section class="status">
                @if ($articles->count() > 0)
                    <ul class="list-unstyled">
                        @include('index._article')
                    </ul>
                    <div class="mt-5">
                        {!! $articles->render() !!}
                    </div>
                @else
                    <p>没有数据！</p>
                @endif
            </section>
        </div>
    </div>
@stop