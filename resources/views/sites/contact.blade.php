@extends("app")
@section("content")
    @if($first == 'jim')
       <h1>{!! $first !!}}  </h1>
    @else
        <h1>else</h1>
    @endif
@stop

@section('foot')
    <script>alert("this is foot page");</script>
@stop