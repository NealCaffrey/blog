@foreach ($articles as $article)
    <li class="media mt-4 mb-4 article">
        <div class="media-body font-weight-light">
            <h5 class="mt-0 mb-3 font-weight-bold"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></h5>
            <span class="article-title">{{ $article->introduction }}</span>
            <div class="mt-3">
                <span>
                    <i class="fa fa-align-left text-muted"></i>
                    <a href="{{ route('category.show', $article->category->title) }}">{{ $article->category->title }}</a>
                </span>
                <span>
                  <i class="fa fa-eye text-muted pl-3"></i>
                  <span>{{ $article->visits }}</span>
                </span>
                <span>
                  <i class="fa fa-comment text-muted pl-3"></i>
                  <span>{{ $article->comments }}</span>
                </span>

                <span class="float-right">{{ $article->created_at }}</span>
            </div>
        </div>
    </li>
@endforeach
