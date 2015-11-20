@extends('app')
@section('content')
    <h1>articles</h1>
    <hr>
    @foreach($articles as $article)

           <h2><a href="{{ url('articles',$article->id) }}">{{ $article->title }} two</a></h2>
           
            <article>
                <div class="body">
                   {{ $article->content }}
                </div>
            </article>
    @endforeach
@stop