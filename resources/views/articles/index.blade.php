@extends('app')
@section('content')
    <h1>articles: {{ Auth::user()->name }}   {{ Auth::user()->id }}</h1>
    <h1> {{ Auth::user()->user_id  }} </h1>
    <hr>
    @foreach($articles as $article)
            <h2><a href="/articles/{{ $article->id }}">{{ $article->title }} one</a></h2>
           <h2><a href="{{ url('articles',$article->id) }}">{{ $article->title }} two</a></h2>
            <h2><a href="{{ action('ArticlesController@show',[$article->id]) }}">{{ $article->title }} three</a></h2>
            <article>
                <div class="body">
                   {{ $article->content }}
                </div>
            </article>
    @endforeach
@stop