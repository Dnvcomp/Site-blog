@if($portfolios && count($portfolios) > 0)
    <div class="section-block">
        <div class="container">
            <div class="row">
                @foreach($portfolios as $key => $item)

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset(env('DNVCOMP')) }}/img/projects/{{ $item->img->max }}" style="width: 262px; height: 195px;" alt="River">
                                    <div class="team-member-overlay">
                                        <div class="team-member-content">
                                            <a href="#"><i class="fa fa-facebook-official"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-name">
                                    <h4><a href="{{ route('portfolios.show',['alias'=>$item->alias]) }}">{{ $item->title }}</a></h4>
                                    <h6>{{ $item->filter->title }}</h6>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endif