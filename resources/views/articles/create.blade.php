@extends("app")
@section('content')
    <h1>whrite new post</h1>
    {!! Form::open(['url'=>'/articles/']) !!}
    @include('articles.form')
    @include('errors.list')
@stop