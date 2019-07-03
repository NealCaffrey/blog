@foreach ($articles as $article)
    <li class="media mt-4 mb-4 article">
        <div class="media-body">
            <h5 class="mt-0 mb-3"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h5>
            {{ $article->introduction }}
            <div class="mt-2">
                <span>{{ $article->created_at }}</span>
            </div>
        </div>
    </li>
@endforeach