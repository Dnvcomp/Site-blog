@extends(env('DNVCOMP').'.layouts.dnvcomp')

@section('topBar')
    {!! $topBar !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('slider')
    {!! $sliders !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('bar')
    {!! $rightBar !!}
@endsection

@section('members')
    {!! $members !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection
