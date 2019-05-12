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
        <li class="comment">
            <div class="comment-container">

                <div class="comment-author">
                    <img src="{{ asset(env('DNVCOMP')) }}/img/avatar/nicola.jpeg" class="avatar" height="75" width="75" alt="Comment avatar">
                    <cite class="fn">Mikola</cite>
                </div>

                <div class="comment-meta">
                    <div class="intro">
                        <div class="commentDate">
                            <a href="#">September 24, 2012 at 1:32 pm</a>
                        </div>
                        <div class="commentNumber">#&nbsp;2</div>
                    </div>
                    <div class="comment-body">
                        <p>While i’m the author of the post. My comment template is different, something like a “sticky comment”!</p>
                    </div>
                </div>
            </div>
        </li>
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
            <form class="form-inlineы" action="sendmail.php" method="post" id="commentform">
                <div class="form-group">
                    <label for="exampleInputName2">Имя</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Ivan">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail2">Е-мэйл</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="ivan@podusham.by">
                </div>

                <div class="form-group">
                    <label for="exampleInputName2">Сайт</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="http://podusham.by">
                </div>

                <div class="form-group">
                    <label for="comment">Ваш комментарий</label>
                    <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" placeholder="Введите текст комментария"></textarea>
                </div>
                <div class="mt-20"></div>
                <button type="button" class="btn btn-success pull-right">Отправить</button>
            </form>
        </div>
        <!-- // Forrm for commemts -->
    </div>
    @endif
</div>