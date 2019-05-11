<div class="col-md-8 col-sm-8 col-xs-12">
    @if($article)
    <div class="blog-post">
        <img src="{{ asset(env('DNVCOMP')) }}/img/articles/{{ $article->img->path }}" alt="Articles">
        <br>
        <h4>{{ $article->title  }}</h4>
        <blockquote>
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-3">
                    <div class="mt-15">
                        <i class="icon-unlink"></i>
                    </div>
                </div>
                <div class="col-md-11 col-sm-11 col-xs-9 blockquote">
                    <p>{!! $article->text !!}</p>
                </div>
            </div>
        </blockquote>

        <div class="blog-post-info">
            <i class="icon-calendar-6"></i><span>{{ $article->created_at->format('d M Y') }}</span>
        </div>

        <div class="blog-post-info">
            <i class="icon-users"></i><span>{{ $article->user->name }}</span>
        </div>

        <div class="blog-post-info">
            <i class="icon-attachment"></i><a href="{{ route('articlesCat',['cat_alias'=>$article->category->alias]) }}"><span>{{ $article->category->title }}</span></a>
        </div>

        <div class="blog-post-info">
            <i class="icon-users"></i><a href="#comments"><span>{{ count($article->comments) ? count($article->comments) : '0' }}&nbsp;{{ Lang::choice('ru.comments',count($article->comments)) }}</span></a>
        </div>

        <div class="blog-post-share"></div>
        </div>
    </div>
    @endif
</div>