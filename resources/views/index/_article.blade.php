@foreach ($articles as $article)
    <li class="media mt-4 mb-4">
        <div class="media-body">
            <h5 class="mt-0 mb-1">{{ $article->title }} <small> / {{ $article->created_at }}</small></h5>
            {{ $article->content }}
        </div>
    </li>
@endforeach