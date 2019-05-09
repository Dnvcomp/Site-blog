<!-- Left Side  -->
@if($portfolios && count($portfolios) > 0)
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="blog-post">
            @foreach($portfolios as $key => $item)
                @if($key == 0)
                    <h3>{{ trans('ru.latest_projects') }}</h3><br>
                    <img src="{{ asset(env('DNVCOMP')) }}/img/portfolio/{{ $item->img->path }}" class="border-round" alt="blog-image">
                    <br>
                    <h2 class="mt-15"><a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">{{ $item->title }}</a></h2><br>
                    <blockquote>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 blockquote">
                                <p>{!! str_limit($item->text,200) !!}</p>
                                <a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}" class="button-lg button-primary mt-30" data-duration="1150" data-delay="500">Read More</a>
                            </div>
                        </div>
                    </blockquote>
                    @continue
                @endif
            @endforeach
        </div>
    </div>
@endif
<!-- // Left Side  -->