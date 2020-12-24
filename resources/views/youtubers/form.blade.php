<div class="form-group">
    {!! Form::label('yt_name', '球員姓名：') !!}
    {!! Form::text('yt_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('c_ID', '頻道編號：') !!}
    {!! Form::select('c_ID', $teams, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year','年齡:') !!}
    {!! Form::date('year',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('education', '學歷：') !!}
    {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('country', '國家：') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
