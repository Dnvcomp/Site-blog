@extends(env('DNVCOMP').'.layouts.dnvcomp')

@section('navigation')
    {!! $navigation !!}
@endsection
@section('content')
    <div class="container">
        <div class="col-md-5 col-sm-5 col-xs-12">
            <img src="{{ asset(env('DNVCOMP')) }}/img/error/404.png" alt="Error 404">
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="block-404">
                <h1>Страница не найдена.</h1>
                <h2>Вы указали неправильный URL адрес страницы.</h2>
                <h4>Запрашиваемая Вами страница, была удалена или переименована.</h4>
                <p>Если Вы желаете продолжить просмотр и чтение страниц, пожалуйста перейдите на главную страницу, нажав на кнопку ниже.</p>
                <div class="center-holder">
                    <a href="{{ url('/') }}" class="button button-primary mt-30">На главную</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include(env('DNVCOMP').'.footer')
@endsection
