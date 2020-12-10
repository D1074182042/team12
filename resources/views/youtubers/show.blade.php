
@extends('app')

@section('title', '顯示特定youtuber')

@section('youtuber_theme', '您所選取的youtuber資料')

@section('youtuber_contents')

成員編號：{{ $youtuber->id }}<br/>
成員姓名：{{ $youtuber->yt_name }}<br/>
頻道編號：{{ $c_ID }}<br/>
年齡：{{ $youtuber->year }}<br/>
學歷：{{ $youtuber->education }}<br/>
國家：{{ $youtuber->country }}<br/>

@endsection
