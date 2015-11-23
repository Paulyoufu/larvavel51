@extends('app')
@section('content')
    <h1>{{ $article->tilte }}</h1>
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    @include('articles.form')
    @include('errors.list')
@stop