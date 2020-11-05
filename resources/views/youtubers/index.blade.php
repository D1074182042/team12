<html>
<head>

</head>
<body>
<h1>這是查詢youtubers的view</h1>
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
        </tr>
    @endforeach
    </tbody>
</table>

</body>
<a href="/channels">回到頻道的View</a>
</html>
