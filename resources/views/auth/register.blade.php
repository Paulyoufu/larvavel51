@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">}}
        {!! Form::open(['url'=>'/auth/register'])!!}}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class' => 'form-control']) !!}
        </div>
        <!--ps-->
        <div class="form-group">
            {!! Form::label('password','password:') !!}
            {!! Form::password('password',['class'=> 'form-conrol']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation','password_confirmation:') !!}
            {!! Form::password('password_confirmation',['class'=> 'form-conrol']) !!}
        </div>

        {!! Form::submit('注册',['class' => 'form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop

