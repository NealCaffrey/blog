@foreach ($articles as $article)
    <li class="media mt-4 mb-4">
        <div class="media-body">
            <h5 class="mt-0 mb-1"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h5>
            <h6>{{ $article->created_at }}</h6>
            {{ $article->content }}
        </div>
    </li>
@endforeach