
@extends('app')

@section('title', '顯示特定youtuber')

@section('youtuber_theme', '您所選取的youtuber資料')

@section('youtuber_contents')

    成員編號:{{$id}}<br/>
    成員姓名:{{$yt_name}}<br/>
    頻道編號:{{$c_ID}}<br/>
    年齡:{{$year}}<br/>
    學歷:{{$education}}<br/>
    國家:{{$country}}<br/>

@endsection
