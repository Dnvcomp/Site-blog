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
        <div class="mt-30"></div>
        <!-- Block comments -->
        <div id="comments">
            <h3 id="comments-title"><span>{{ count($article->comments) }}</span>&nbsp;{{ Lang::choice('ru.comments',count($article->comments)) }}</h3>

            @if(count($article->comments) > 0)
                @set($com,$article->comments->groupBy('parent_id'))
                <div class="mt-10"></div>
                <div id="comments">
                    <ol class="commentlist group">
                        @foreach($com as $key => $comments)
                            @if($key !== 0)
                                @break
                            @endif

                            @include(env('DNVCOMP').'.comment',['items'=> $comments])
                        @endforeach
                    </ol>
                @endif
            </div><!-- END COMMENTS -->
        </div>
        <!-- // Block comments -->
        <div class="mt-35"></div>
        <!-- TRACKBACK & PINGBACK -->
        <h2 id="trackbacks">Trackbacks and pingbacks</h2>
        <ol class="trackbacklist"></ol>
        <p><em>No trackback or pingback available for this article.</em></p>
        <!-- // TRACKBACK & PINGBACK -->

        <!-- Forrm for commemts -->
        <div id="respond">
            <h3 id="reply-title">Leave a<span style="color: #3B526B">&nbsp;Reply</span><smail ><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display: none;">Cancel reply</a></smail></h3>
            <div class="mt-40"></div>
            <form class="form-inline" action="{{ route('comment.store') }}" method="post" id="commentform">
                @if(!Auth::check())
                    <div class="form-group">
                        <label for="exampleInputName2">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ivan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail2">Е-мэйл</label>
                        <input type="email" class="form-control" name="email" id="Email" placeholder="ivan@podusham.by">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName2">Сайт</label>
                        <input type="text" class="form-control" id="url" name="site" placeholder="http://podusham.by">
                    </div>
                @endif

                <div class="form-group">
                    <label for="comment">Ваш комментарий</label>
                    <textarea class="form-control" id="comment" name="text" cols="45" rows="8" placeholder="Введите текст комментария"></textarea>
                </div>

                <div class="mt-20"></div>
                    {{ csrf_field() }}
                    <input id="comment_post_ID" type="hidden" name="comment_post_ID" value="{{ $article->id }}">
                    <input id="comment_parent" type="hidden" name="comment_parent" value="0">
                    <input name="submit" type="submit" id="submit" value="Post Comment" />
            </form>
        </div>
        <!-- // Forrm for commemts -->
    </div>
    @endif
</div>