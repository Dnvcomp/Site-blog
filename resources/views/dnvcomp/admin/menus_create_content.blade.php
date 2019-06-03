<div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h2>Меню навигации</h2>
            <p>Добавление пунктов и ссылок меню</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            {!! Form::open(['url' => (isset($menu->id)) ? route('admin.menus.update',['menus'=>$menu->id]) : route('admin.menus.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-6col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Заголовок</label>
                        {!! Form::text('title',isset($menu->title) ? $menu->title  : old('title'), ['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Родительский элемент меню</label>
                        {!! Form::select('parent', $menus, isset($menu->parent) ? $menu->parent : null) !!}
                    </div>
                </div>
            </div><!-- //row -->

            <div class="row mt-20"></div>
            <h3 class="text-center">Тип меню</h3>
            <div class="row mt-15"></div>

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3>{!! Form::radio('type', 'customLink',(isset($type) && $type == 'customLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                        <span>Пользовательская ссылка</span>
                    </h3>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Путь для ссылки</label>
                        {!! Form::text('custom_link',(isset($menu->path) && $type=='customLink') ? $menu->path  : old('custom_link'), ['class'=>'form-control','placeholder'=>'Введите название']) !!}
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3>{!! Form::radio('type', 'blogLink',(isset($type) && $type == 'blogLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                        <span>Раздел статьи</span>
                    </h3>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Ссылка на категорию статьи</label>
                        {!! Form::text('custom_link',(isset($menu->path) && $type=='customLink') ? $menu->path  : old('custom_link'), ['class'=>'form-control','placeholder'=>'Введите название']) !!}
                    </div>
                    <div>
                        @if($categories)
                            {!! Form::select('category_alias',$categories,(isset($option) && $option) ? $option :FALSE) !!}
                        @endif
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- null -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Ссылка на материал статьи:</label>
                        {!! Form::select('article_alias', $articles, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3>{!! Form::radio('type', 'portfolioLink',(isset($type) && $type == 'portfolioLink') ? TRUE : FALSE,['class' => 'radioMenu']) !!}
                        <span>Раздел авторы:</span></h3>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Ссылка на запись авторов:</label>
                        {!! Form::select('portfolio_alias', $portfolios, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- null -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <i class="icon-user"></i>
                        <label for="name-contact-us">Авторы:</label>
                        {!! Form::select('filter_alias', $filters, (isset($option) && $option) ? $option :FALSE, ['class'=>'form-control','placeholder' => 'Не используется']) !!}
                    </div>
                </div>
            </div><!-- //row -->
            @if(isset($menu->id))
                <input type="hidden" name="_method" value="PUT">
            @endif

            <div class="submit-button">
                {!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
