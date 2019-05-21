<!-- Blog List START -->
<div class="section-block-grey">
    <div class="container">
        @if($portfolios)
            @foreach($portfolios as $portfolio)
                <div class="blog-list">
                    <div class="row">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <img src="{{ asset(env('DNVCOMP')) }}/img/portfolio/{{ $portfolio->img->max }}" style="width: 750px; height: 385px" alt="Author image">
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="blog-list-text">
                                <h3><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias])}}">{{ $portfolio->title }}</a></h3>
                                <p>{!! str_limit($portfolio->text,230) !!}</p>
                                <div class="blog-list-admin">
                                    <a href="{{ route('portfolios.show',['alias'=>$portfolio->alias])}}"> {{ trans('ru.read_more') }} </a>
                                    @if($portfolio->created_at)
                                        <span style="color: #761c19; font-weight: bold;">{{ $portfolio->created_at->format('d m Y') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <!-- Pagination -->
                <nav aria-label="Pagination">
                    <ul class="pager">
                        @if($portfolios->lastPage() > 1)
                            @if($portfolios->currentPage() !== 1)
                                <li><a href="{{ $portfolios->url(($portfolios->currentPage()-1)) }}">{{ Lang::get('pagination.previous') }}</a></li>
                            @endif

                            @for($i = 1; $i <= $portfolios->lastPage(); $i++ )
                                @if($portfolios->currentPage() == $i)
                                    <li><a class="disabled">{{ $i }}</a></li>
                                @else
                                    <li><a href="{{ $portfolios->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor

                            @if($portfolios->currentPage() !== $portfolios->lastPage())
                                <li><a href="{{ $portfolios->url(($portfolios->currentPage() + 1)) }}">{{ Lang::get('pagination.next') }}</a></li>
                            @endif
                        @endif

                    </ul>
                </nav>
                <!-- //Pagination -->
        @endif
    </div>
</div>
<!-- Blog List END -->