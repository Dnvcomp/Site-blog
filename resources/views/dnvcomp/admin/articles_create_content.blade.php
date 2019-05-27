<!-- Contact Form Section Start -->
<div class="section-block">
    <div class="container">
        <div class="section-heading center-holder">
            <h2>Добавление нового материала</h2>
        </div>
        <div class="row mt-50"></div>
        <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
                {!! Form::open(['url' => (isset($article->id)) ? route('admin.articles.update',['articles'=>$article->alias]) : route('admin.articles.store'),'class'=>'primary-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    <div class="col-xs-6">
                        {!! Form::text('title',isset($article->title) ? $article->title  : old('title'), ['placeholder'=>'Введите заголовок материала']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::text('keywords', isset($article->keywords) ? $article->keywords  : old('keywords'), ['placeholder'=>'Введите ключевые слова для страницы']) !!}
                    </div>
                    <div class="row mt-100"></div>
                    <div class="col-xs-6">
                        {!! Form::text('meta_desc', isset($article->meta_desc) ? $article->meta_desc  : old('meta_desc'), ['placeholder'=>'Введите мета описание для страницы']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::text('alias', isset($article->alias) ? $article->alias  : old('alias'), ['placeholder'=>'Логин, Имя, Псевдоним или Имя автора']) !!}
                    </div>
                    <div class="row mt-100"></div>
                    <div class="col-xs-12">
                        <label><h4>Краткое описание статьи</h4></label>
                        <div class="row mt-10"></div>
                        {!! Form::textarea('desc', isset($article->desc) ? $article->desc  : old('desc'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите краткое описание статьи']) !!}
                    </div>
                    <div class="row mt-60"></div>
                    <div class="col-xs-12">
                        <div class="row mt-10"></div>
                        <label><h4>Полное описание статьи</h4></label>
                        <div class="row mt-10"></div>
                        {!! Form::textarea('text', isset($article->text) ? $article->text  : old('text'), ['id'=>'editor2','class' => 'form-control','placeholder'=>'Введите полное описание статьи']) !!}
                    </div>

                    @if(isset($article->img->path))
                    <li class="textarea-field">
                        <label>
                            <span class="label">Изовражение материала</span>
                        </label>
                        {{ HTML::image(asset(env('THEME')).'/images/articles/'.$article->img->path,'',['style'=>'width:400px']) }}
                        {!! Form::hidden('old_image',$article->img->path) !!}
                    </li>
                    @endif

                    <div class="textarea-field">
                        <label for="name-contact-us">
                            <span class="label">Изображение:</span>
                            <br />
                            <span class="sublabel">Изображение материала</span><br />
                        </label>

                        <div class="input-prepend">
                            {!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
                        </div>
                    </div>

                    <div class="text-field">
                        <label for="name-contact-us">
                            <span class="sublabel">Категория материала</span><br />
                        </label>
                        <div>
                            {!! Form::select('category_id', $categories,isset($article->category_id) ? $article->category_id  : '') !!}
                        </div>
                    </div>

                    @if(isset($article->id))
                        <input type="hidden" name="_method" value="PUT">
                    @endif

                    <div class="submit-button">
                        {!! Form::button('Сохранить', ['class' => 'button button-primary mt-30','type'=>'submit']) !!}
                    </div>
                {!! Form::close() !!}
            <script>
                CKEDITOR.replace('editor');
                CKEDITOR.replace('editor2');
            </script>
        </div>
    </div>
</div>