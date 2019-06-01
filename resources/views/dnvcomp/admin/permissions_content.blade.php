<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h2 style="color: #3B526B;">Привилегии прав пользователей</h2>
            <p class="text-center">Редактирование и ограничение прав и привелегий, каждого зарегистрированного пользователя.</p>
        </div>
        <form action="{{ route('admin.permissions.store') }}" method="post">
            {{ csrf_field() }}
            <div class="col-md-12 col-sm-12 col-xs-12">
                <table class="table table-condensed" style="width: 100%; border: 1px solid #18ba60;">

                    <thead>
                    <th class="success"><h4>Привилегии</h4></th>
                    @if(!$roles->isEmpty())
                        @foreach($roles as $item)
                            <th class="success"><h4>{{ $item->name  }}</h4></th>
                        @endforeach
                    @endif
                    </thead>

                    <tbody>
                        @if(!$priv->isEmpty())
                            @foreach($priv as $value)
                                <tr>
                                    <td class="active">{{ $value->name }}</td>
                                    @foreach($roles as $role)
                                        <td class="active">
                                            @if($role->hasPermission($value->name))
                                                <input checked name="" type="checkbox" value="">
                                            @else
                                                <input name="" type="checkbox" value="">
                                            @endif()
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    </tbody>

                </table>
            </div>
            <input class="btn btn-success" type="submit" value="Обновить">
        </form>
    </div>
</div>