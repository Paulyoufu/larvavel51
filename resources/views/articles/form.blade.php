<div class="form-groups">
    {!! Form::label('title')  !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!} <!--有三个参数 第二个为null代表默认值为空,第三参数代表属性-->
</div>
<div class="from-group">
    {!! Form::label('content',"") !!}
    {!! Form::textarea('content',null,['class' => 'form-control']) !!}
    {!! Form::submit('发表文章',['class'=>'btn btn-primary form-controll']) !!}
</div>
<!-- field -->
<div class="form-group">
    {!! Form::label('published_at','published_at:')!!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>

{!! Form::close() !!}
