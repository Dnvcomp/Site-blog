<!-- Project Detail START -->
@if($portfolio)
<div class="section-block">
    <div class="container">
        <div class="p-detail-img">
            <h1>{{ $portfolio->title }}</h1>
            <img src="{{ asset(env('DNVCOMP')) }}/img/portfolio/{{ $portfolio->img->path }}" class="border-round img-shadow mt-20" style="width: 1140px; height: 400px;" alt="project-detail-image">
            <p>{!! $portfolio->text !!}</p>
        </div>
    </div>
</div>
@endif
<!-- Project Detail END -->

<!-- Team Members START -->
<div class="section-block">
    <div class="container">
        <div class="row">
            @if(!$portfolios->isEmpty())
                @foreach($portfolios as $portfolio)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="team-member-image">
                                <a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">
                                    <img src="{{ asset(env('DNVCOMP')) }}/img/portfolio/{{ $portfolio->img->max }}" style="width: 262px; height: 195px;" alt="Author article">
                                </a>
                                <div class="team-member-overlay">
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h4><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ $portfolio->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Team Members END -->