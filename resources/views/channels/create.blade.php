@extends('app')

@section('title', '建立頻道表單')

@section('channel_theme', '建立頻道的表單')

@section('channel_contents')

頻道名稱：{{ $c_name }}<br/>
類別：{{ $category }}<br/>
粉絲數(萬)：{{ $fans }}<br/>
平均觀看量(萬)：{{ $views }}<br/>


@endsection
