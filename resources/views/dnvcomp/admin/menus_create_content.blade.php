<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h1>Меню навигации</h1>
            <p style="color: #3B526B">Добавление элементов меню и навигационных ссылок</p>
        </div>
        {!! Form::open(['url' => (isset($menu->id)) ? route('admin.menus.update',['menus'=>$menu->id]) : route('admin.menus.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="row">
            <ul>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="name-contact-us" style="color: #3B526B">Заголовок пункта</label>
                        <div class="input-prepend">
                            {!! Form::text('title',isset($menu->title) ? $menu->title  : old('title'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label style="color: #3B526B" for="name-contact-us">Родительский пункт меню</label>
                        <div class="input-prepend">
                            {!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null) !!}
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        <div class="row mt-10"></div>
        <h2 class="text-center" style="color: #3B526B";>Тип меню</h2>
        <div class="row mt-10"></div>

        <div id="accordion">
            <div class="checkbox">
                {!! Form::radio('type', 'customLink',(isset($type) && $type == 'customLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                &nbsp;<span style="color: green">Пользовательская ссылка:</span>
            </div>

            <div class="row">
                <ul>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label style="color: #3B526B" for="name-contact-us">Путь для ссылки</label>
                            <div class="input-prepend">
                                {!! Form::text('custom_link',(isset($menu->path) && $type=='customLink') ? $menu->path  : old('custom_link'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
                            </div>
                        </div>
                    </div>
                </ul>
            </div>

            <div class="checkbox">
                {!! Form::radio('type', 'blogLink',(isset($type) && $type == 'blogLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                &nbsp;<span style="color: green">Раздел Статьи:</span>
            </div>

            <div class="row">
                <ul>
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form-group">
                            <label style="color: #3B526B" for="name-contact-us">Ссылка на категорию статьи</label>
                            <div class="input-prepend">
                                @if($categories)
                                    {!! Form::select('category_alias',$categories,(isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="color: #3B526B" for="name-contact-us">Ссылка на материал статьи</label>
                            <div class="input-prepend">
                                {!! Form::select('article_alias', $articles, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </ul>
            </div>

            <div class="checkbox">
                {!! Form::radio('type', 'portfolioLink',(isset($type) && $type == 'portfolioLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                &nbsp;<span style="color: green">Раздел авторы</span>
            </div>

            <div class="row">
                <ul>
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form-group">
                            <label style="color: #3B526B" for="name-contact-us">Ссылка на запись авторов</label>
                            <div class="input-prepend">
                                {!! Form::select('portfolio_alias', $portfolios, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="color: #3B526B" for="name-contact-us">Авторы</label>
                            <div class="input-prepend">
                                {!! Form::select('filter_alias', $filters, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="row mt-10"></div>
        </div>

        @if(isset($menu->id))
            <input type="hidden" name="_method" value="PUT">
        @endif

        <ul>
            <div class="submit-button">
                {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit']) !!}
            </div>
        </ul>

        {!! Form::close() !!}
    </div>
</div>

<script>
    jQuery(function($) {
        $('#accordion').accordion({
            activate: function(e, obj) {
                obj.newPanel.prev().find('input[type=radio]').attr('checked','checked');
            }
        });
    });
</script>