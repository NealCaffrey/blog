<div class="sidebar mt-4 mb-4">
    <div class="header">
        <div class="col-md-12">
            热门文章
        </div>
    </div>
    <div class="col-md-12">
        <ul class="list-unstyled font-weight-light">
            @foreach( $active['active_article'] as $k => $act)
                <li>
                    <a href="{{ url('article', [$act->id]) }}">{{ $k+1 }}. {{ $act->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="sidebar mt-4 mb-4">
  <div class="header">
    <div class="col-md-12">
      最新文章
    </div>
  </div>
  <div class="col-md-12">
    <ul class="list-unstyled font-weight-light">
      @foreach( $active['new_article'] as $k => $act)
        <li>
          <a href="{{ url('article', [$act->id]) }}">{{ $k+1 }}. {{ $act->title }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="sidebar mt-4 mb-4">
  <div class="header">
    <div class="col-md-12">
      所有分类
    </div>
  </div>
  <div class="col-md-12">
    <ul class="list-unstyled font-weight-light">
      @foreach( $active['category_list'] as $k => $cate)
        <li>
          <a href="{{ url('category', [$cate->title]) }}">{{ $k+1 }}. {{ $cate->title }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
