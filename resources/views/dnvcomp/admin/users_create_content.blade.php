<div class="section-block-grey">
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => (isset($user->id)) ? route('admin.users.update',['users'=>$user->id]) :route('admin.users.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="name-contact-us" style="color: #3B526B">Имя</label>
                    <div class="input-prepend">
                        {!! Form::text('name',isset($user->name) ? $user->name  : old('name'), ['class'=>'form-control','placeholder'=>'Введите имя']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #3B526B" for="name-contact-us">Логин</label>
                    <div class="input-prepend">
                        {!! Form::text('login',isset($user->login) ? $user->login  : old('login'), ['class'=>'form-control','placeholder'=>'Введите логин']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #3B526B" for="name-contact-us">Е-мэйл</label>
                    <div class="input-prepend">
                        {!! Form::text('email',isset($user->email) ? $user->email  : old('email'), ['class'=>'form-control','placeholder'=>'Введите email']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #3B526B" for="name-contact-us">Пароль</label>
                    <div class="input-prepend">
                        {!! Form::password('password') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #3B526B" for="name-contact-us">Повторите пароль</label>
                    <div class="input-prepend">
                        {!! Form::password('password') !!}
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #3B526B" for="name-contact-us">Роль</label>
                    <div class="input-prepend">
                        {!! Form::select('role_id', $roles, (isset($user)) ? $user->roles()->first()->id : null) !!}
                    </div>
                </div>
            </div>
        </div>
        @if(isset($users->id))
            <input type="hidden" name="_method" value="PUT">
        @endif
        <div>
            <div class="submit-button">
                {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>