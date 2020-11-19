<html>
<head>
<body>
<h1>這是顯示單筆頻道的view</h1>
<a href="<?php echo route('channels.index'); ?>" class="ml-1 underline">
    所有頻道
</a><br/>

頻道名稱：{{ $c_name }}<br/>
類別：{{ $category }}<br/>
粉絲數(萬)：{{ $fans }}<br/>
平均觀看量(萬)：{{ $views }}<br/>


</body>
</head>
</html>
