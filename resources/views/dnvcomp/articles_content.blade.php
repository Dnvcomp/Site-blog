<!-- Articles left side -->
@if($articles)
    <div class="col-md-8 col-sm-8 col-xs-12">
        @foreach($articles as $article)
            <div class="blog-post">
                <img src="{{ asset(env('DNVCOMP')) }}/img/articles/{{ $article->img->path }}" alt="Photo articles">
                <h4><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h4>
                <blockquote>
                    <div class="row">

                        <div class="col-md-1 col-sm-1 col-xs-3">
                            <div class="mt-15">
                                <i class="icon-unlink"></i>
                            </div>
                        </div>

                        <div class="col-md-11 col-sm-11 col-xs-9 blockquote">
                            <p>{!! $article->desc !!}</p>
                        </div>
                    </div>
                    <a class="service-grid" href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ Lang::get('ru.read_more') }}</a>
                    <br>

                    <div class="blog-post-info pull-right">
                        <i class="icon-attachment"></i><span><a href="{{ route('articles.show',['alias'=>$article->alias]) }}#respond">{{ count($article->comments) ? count($article->comments) : 0}} {{ Lang::choice('ru.comments',count($article->comments)) }}</a></span>
                    </div>

                    <div class="blog-post-info pull-right">
                        <i class="icon-attachment"></i><span><a href="{{ route('articlesCat',['cat_alias'=>$article->category->alias]) }}">{{ $article->category->title }}</a></span>
                    </div>

                    <div class="blog-post-info pull-right">
                        <i class="icon-users"></i><span><a href="#">{{ $article->user->name }}</a></span>
                    </div>

                    <div class="blog-post-info pull-right">
                        <i class="icon-calendar-6"></i><span>{{ $article->created_at->format('d F Y') }}</span>
                    </div>
                    <br>
                    <div class="blog-post-share"></div>
                    <div class="mt-70"></div>
                </blockquote>
            </div>
        @endforeach
        <!-- Pagination -->
            <nav aria-label="Pagination">
                <ul class="pager">

                    @if($articles->lastPage() > 1)
                        @if($articles->currentPage() !== 1)
                            <li><a href="{{ $articles->url(($articles->currentPage() - 1)) }}">{{ Lang::get('pagination.previous') }}</a></li>
                        @endif

                        @for($i = 1; $i <= $articles->lastPage(); $i++ )
                            @if($articles->currentPage() == $i)
                                <li><a class="disabled">{{ $i }}</a></li>
                            @else
                                    <li><a href="{{ $articles->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor

                        @if($articles->currentPage() !== $articles->lastPage())
                                <li><a href="{{ $articles->url(($articles->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a></li>
                            @endif
                    @endif

                </ul>
            </nav>
            <!-- //Pagination -->
    </div>
    @else
    {!! Lang::get('ru.articles_no') !!}
@endif
<!-- // Articles left side -->
