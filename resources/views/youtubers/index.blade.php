@extends('app')

@section('title', '所有youtuber')

@section('youtuber_theme', '所有youtuber')

@section('youtuber_contents')

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('youtubers.create') }} ">新增youtuber</a>
    </div>

<table>
    <thead>
    <tr>
        <th> 成員</th>
        <th> 頻道編號 </th>
        <th> 年齡 </th>
        <th> 學歷 </th>
        <th> 國家 </th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    </thead>
    <tbody>
    @foreach($youtubers as $youtuber)
        <tr>
            <td> {{$youtuber->yt_name}} </td>
            <td> {{$youtuber->c_ID}} </td>
            <td> {{$youtuber->year}} </td>
            <td> {{$youtuber->education}} </td>
            <td> {{$youtuber->country}} </td>
            <td><a href="<?php echo route('youtubers.show', ['id'=>$youtuber->id]);?>">顯示</a></td>
            <td><a href="<?php echo route('youtubers.edit', ['id'=>$youtuber->id]);?>">修改</a></td>
            <td>
                <form action="{{ url('/youtubers/delete', ['id' => $youtuber->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
 </table>
@endsection
