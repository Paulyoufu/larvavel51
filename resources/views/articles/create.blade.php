@extends("app")
@section('content')
    <h1>whrite new post</h1>
    {!! Form::open(['url'=>'/articles']) !!}
      <div class="form-groups">
        {!! Form::label('title')  !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!} <!--有三个参数 第二个为null代表默认值为空,第三参数代表属性-->
      </div>
      <div class="from-group">
        {!! Form::label('content',"") !!}
        {!! Form::textarea('content',null,['class' => 'form-control']) !!}
        {!! Form::submit('发表文章',['class'=>'btn btn-primary form-controll']) !!}
      </div>
    {!! Form::close() !!}
@stop