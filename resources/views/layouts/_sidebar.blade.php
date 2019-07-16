<div class="sidebar mt-4 mb-4">
    <div class="header">
        <div class="col-md-12">
            最热文章
        </div>
    </div>
    <div class="col-md-12">
        <ul class="list-unstyled font-weight-light">
            @foreach( $active as $k => $act)
                <li>
                    <a href="{{ url('article', [$act->id]) }}">{{ $k+1 }}. {{ $act->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
