<html>
<head>

</head>
<body>
<h1>這是顯示所有youtuber的view</h1>

<a href="<?php echo route('channels.index');?>" class="ml-1 underline">所有頻道
</a>
<a href="<?php echo route('youtubers.create');?>" class="ml-1 underline">新增youtuber
</a>
<a href="/channels">回到頻道的View</a>
<table>
    <thead>
    <tr>
        <th> 成員</th>
        <th> 頻道編號 </th>
        <th> 年齡 </th>
        <th> 學歷 </th>
        <th> 國家 </th>
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
        </tr>
    @endforeach
    </tbody>
</table>

</body>

</html>
