@foreach($items as $item)
<li class="dropdown">
        <a href="{{ $item->url() }}">{{ $item->title }}</a>
        <ul class="dropdown-menu dropdown-menu-left">
            @if($item->hasChildren())
                @include(env('DNVCOMP').'.customMenuItems',['items'=>$item->children()])
            @endif
        </ul>
</li>
@endforeach

