<html>
<head>
<body>
<h1>這是查詢頻道的view</h1>

<table>
    <thead>
    <tr>
        <th> 頻道名稱</th>
        <th> 類別</th>
        <th> 粉絲數(萬) </th>
        <th> 平均觀看量(萬)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($channels as $channel)
        <tr>
            <td> {{$channel->c_name}} </td>
            <td> {{$channel->category}} </td>
            <td> {{$channel->fans}} </td>
            <td> {{$channel->views}} </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="/youtubers">回到Youber的View</a>
</body>
</head>
</html>
