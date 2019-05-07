@if(count($sliders) > 0)
    <div class="pogoSlider" id="js-main-slider">
        @foreach($sliders as $slider)
        <div class="pogoSlider-slide" data-transition="fade" data-duration="1000" style="background-image:url('{{ asset(env('DNVCOMP')) }}/img/{{ $slider->img }}');">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500">{{ $slider->title }}</h2>
                            <p class="pogoSlider-slide-element hidde" data-in="slideRight" data-out="slideUp" data-duration="750" data-delay="900">{!! $slider->desc !!}</p>
                            <a href="#" class="button-lg button-primary mt-30 pogoSlider-slide-element"  data-in="slideRight" data-out="slideDown" data-duration="1150" data-delay="500">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif