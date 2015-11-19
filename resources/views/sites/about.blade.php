@extends('app')
@section('content')
    <h3>people i admire</h3>
    @if(count($people)>0)
    <ul>
        @foreach($people as $person)
            <li>
                {{ $person }}
            </li>
        @endforeach
    </ul>
    @endif
@stop