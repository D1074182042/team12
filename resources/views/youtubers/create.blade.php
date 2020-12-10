@extends('app')

@section('title', '建立youtuber表單')

@section('youtuber_theme', '建立youtuber的表單')

@section('youtuber_contents')


    {!! Form::open(['url' => 'youtubers/store']) !!}
    <div class="form-group">
        {!! Form::label('yt_name', 'youtuber姓名：') !!}
        {!! Form::text('yt_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('c_id', '頻道編號：') !!}
        {!! Form::text('c_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year', '年齡：') !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
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
        {!! Form::submit('新增球員', ['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@endsection

