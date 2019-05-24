@extends(env('DNVCOMP').'.layouts.dnvcomp')

@section('content')
    <div class="row">
        <form id="contact-form-contact-us" action="{{ url('/login') }}" method="post" class="primary-form">
            {{ csrf_field() }}
            <div class="col-sm-6 col-md-6 col-xs-12">
                <input type="text" name="login" id="login" placeholder="Логин">
            </div>
            @if ($errors->has('login'))
                <span class="help-block">
                    <strong>{{ $errors->first('login') }}</strong>
                </span>
            @endif
            <div class="col-sm-6 col-md-6 col-xs-12">
                <input type="password" name="password" id="password" placeholder="Пароль">
            </div>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <div class="col-xs-12">
                <div class="center-holder">
                    <button type="submit" name="yit_sendmail" class="button button-primary mt-15">Войти</button>
                </div>
            </div>
        </form>
    </div>
@endsection