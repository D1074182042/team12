<html>
<head>
</head>
<body class="antialiased">
<h1>這是顯示所有頻道的 view </h1>

<a href="<?php echo route('youtubers.index'); ?>" class="ml-1 underline">
    所有頻道
</a>

<a href="<?php echo route('channels.create'); ?>" class="ml-1 underline">
    新增頻道
</a><br/>

<table>
    <tr>
        <th> 頻道名稱</th>
        <th> 類別</th>
        <th> 粉絲數(萬) </th>
        <th> 平均觀看量(萬)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($channels as $channel)
        @if ($channel->category == '生活類')
            <tr style="color:red;">
                <td> {{$channel->c_name}} </td>
                <td> {{$channel->category}} </td>
                <td> {{$channel->fans}} </td>
                <td> {{$channel->views}} </td>
                <td><a href="<?php echo route('channels.show', ['id' => $channel->id]);?>">顯示</a></td>
                <td><a href="<?php echo route('channels.edit', ['id' => $channel->id]);?>">修改</a></td>
            </tr>
        @else
            <tr style="color:blue;">
                <td> {{$channel->c_name}} </td>
                <td> {{$channel->category}} </td>
                <td> {{$channel->fans}} </td>
                <td> {{$channel->views}} </td>
                <td><a href="<?php echo route('channels.show', ['id' => $channel->id]);?>">顯示</a></td>
                <td><a href="<?php echo route('channels.edit', ['id' => $channel->id]);?>">修改</a></td>
            </tr>
    @endif
    @endforeach
</table>
</body>

</html>
