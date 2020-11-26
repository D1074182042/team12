@extends('app')

@section('title', '編輯特定youtuber')

@section('youtuber_theme', '編輯中的youtuber')

@section('youtuber_contents')


成員的姓名：{{ $yt_name }}<br/>
成員的學歷：{{ $education }}<br/>
成員的國家：{{ $country }}<br/>

@endsection

