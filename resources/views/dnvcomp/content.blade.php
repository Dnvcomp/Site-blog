<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">

    @if($portfolios && count($portfolios) > 0)
        <!-- Left Side START -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-post">
                    @foreach($portfolios as $key => $item)
                        @if($key == 0)
                            <h3><a href="#">{{ $item->title }}</a></h3><br>
                            <img src="{{ asset(env('DNVCOMP')) }}/img/articles/isle.jpg" class="border-round" alt="blog-image">
                            <br>
                            <h2 class="mt-15"><a href="#">{{ $item->filter->title }}</a></h2><br>
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 blockquote">
                                        <p>{!! str_limit($item->text,200) !!}</p>
                                        <a href="#" class="button-lg button-primary mt-30" data-duration="1150" data-delay="500">Read More</a>
                                    </div>
                                </div>
                            </blockquote>
                            @continue
                        @endif
                @endforeach
            </div>
            </div>
            <!-- //Left Side START -->
    @endif


    </div>
</div>