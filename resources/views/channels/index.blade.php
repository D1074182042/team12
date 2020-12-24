@extends('app')

@section('title', '所有頻道')

@section('channel_theme', '所有頻道')

@section('channel_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('channels.create') }} ">新增頻道</a>
        <a href="{{ route('channels.index') }} ">所有球隊</a>
    </div>

<table>
    <tr>
        <th> 頻道名稱</th>
        <th> 類別</th>
        <th> 粉絲數(萬) </th>
        <th> 平均觀看量(萬)</th>
    </tr>
    @foreach($channels as $channel)
        @if ($channel->category == '生活類')
            <tr style="color:red;">
                <td> {{$channel->c_name}} </td>
                <td> {{$channel->category}} </td>
                <td> {{$channel->fans}} </td>
                <td> {{$channel->views}} </td>
                <td><a href="{{ route('channels.show', ['id' => $channel->id]) }}">顯示</a></td>
                <td><a href="{{ route('channels.edit', ['id' => $channel->id])}}>">修改</a></td>
            </tr>
        @else
            <tr style="color:blue;">
                <td> {{$channel->c_name}} </td>
                <td> {{$channel->category}} </td>
                <td> {{$channel->fans}} </td>
                <td> {{$channel->views}} </td>
                <td><a href="{{route('channels.show', ['id' => $channel->id])}}>">顯示</a></td>
                <td><a href="{{ route('channels.edit', ['id' => $channel->id])}}>">修改</a></td>
            </tr>
    @endif
    @endforeach
</table>
@endsection
