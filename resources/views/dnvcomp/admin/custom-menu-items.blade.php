@foreach($items as $item)
    <tr>
        <td>{{ $paddingLeft }} {!! Html::link(route('admin.menus.edit',['menus' => $item->id]),$item->title) !!}</td>
        <td>{{ $item->url() }}</td>
        <td>
            {!! Form::open(['url' => route('admin.menus.destroy',['menus'=> $item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
            {{ method_field('DELETE') }}
            {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @if($item->hasChildren())
        @include(env('DNVCOMP').'.admin.custom-menu-items', array('items' => $item->children(),'paddingLeft' => $paddingLeft.''))
    @endif

@endforeach