@extends('app')

@section('title', '編輯特定頻道')

@section('channel_theme', '編輯中的頻道')

@section('channel_contents')

頻道名稱：{{ $c_name }}<br/>
類別：{{ $category }}<br/>
粉絲數(萬)：{{ $fans }}<br/>
平均觀看量(萬)：{{ $views }}<br/>

@endsection
