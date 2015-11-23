@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/login'])!!}
          <div class="form-group">
              {!! Form::label('email','Email:') !!}
              {!! Form::email('email',null,['class' => 'form-control']) !!}
          </div>
        <!--ps-->
        <div class="form-group">
            {!! Form::label('password','password:') !!}
            {!! Form::password('password',['class'=> 'form-conrol']) !!}
        </div>
        {!! Form::submit('登录',['class' => 'form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop

