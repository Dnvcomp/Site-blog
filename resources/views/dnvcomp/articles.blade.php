@extends(env('DNVCOMP').'.layouts.dnvcomp')

@section('topBar')
    {!! $topBar !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('bar')
    {!! $rightBar or '' !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection