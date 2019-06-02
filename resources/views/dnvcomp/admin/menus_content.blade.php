<div class="section-block-grey">
    <div class="container">
        <div cl
        <div class="section-heading center-holder">
            <h2>Навигационное меню</h2>
            <p>Удаление и добавление ссылок меню в навигации сайта</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><h4 style="color:#3B526B;">Название</h4></th>
                            <th><h4 style="color:#3B526B;">Ссылка</h4></th>
                            <th><h4 style="color:darkred;">Удалить</h4></th>
                        </tr>
                    </thead>
                    @if($menus)
                        @include(env('DNVCOMP').'.admin.custom-menu-items', array('items' => $menus->roots(),'paddingLeft' => ''))
                    @endif
                </table>
            </div>
            {!! Html::link(route('admin.menus.create'),'Добавить  пункт',['class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>