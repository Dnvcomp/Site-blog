@if($articles)
<div class="container">
    <div class="row">
        <div class="panel panel-default adm-articles">
            <div class="panel-heading panel-head"><h3>Добавленные статьи</h3></div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="th-succ">ID</th>
                        <th class="th-articles">Заголовок</th>
                        <th class="th-articles">Текст</th>
                        <th class="th-articles">Изображение</th>
                        <th class="th-articles">Категория</th>
                        <th class="th-articles">Автор</th>
                        <th class="th-red">Действие</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td class="text-left">{{ $article->id }}</td>
                        <td class="text-left">{!! Html::link(route('admin.articles.edit',['articles'=>$article->alias]),$article->title) !!}</td>
                        <td class="text-left">{{ str_limit($article->text,200)}}</td>
                        <td>
                            @if(isset($article->img->mini))
                                {!! Html::image(asset(env('DNVCOMP')).'/img/articles/'.$article->img->mini) !!}
                            @endif
                        </td>
                        <td>{{ $article->category->title}}</td>
                        <td>{{ $article->alias }}</td>
                        <td>
                            {!! Form::open(['url'=>route('admin.articles.destroy',['articles'=>$article->alias]),'class'=>'form-horizontal','method'=>'post']) !!}
                                {{ method_field('DELETE') }}
                                {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! Html::link(route('admin.articles.create'),'Добавить  материал',['class' => 'btn btn-success']) !!}
    </div>
</div>
@endif