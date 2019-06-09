<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h2>Пользователи</h2>
            <p>Удаление и редактирование прав пользователей</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Е-мейл</th>
                        <th>Логин</th>
                        <th>Роль</th>
                        <th>Удалить</th>
                    </thead>
                    @if($users)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{!! Html::link(route('admin.users.edit',['users' => $user->id]),$user->name) !!}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->login }}</td>
                                <td>{{ $user->roles->implode('name', ', ') }}</td>

                                <td>
                                    {!! Form::open(['url' => route('admin.users.destroy',['users'=> $user->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                    {{ method_field('DELETE') }}
                                    {!! Form::button('Удалить', ['class' => 'btn btn-french-5','type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
        {!! Html::link(route('admin.users.create'),'Добавить пользователя',['class' => 'btn btn-success','type'=>'submit']) !!}

    </div>
</div>