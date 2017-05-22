<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2><?=$title?></h2><a href="<?php echo site_url('Article/export').'?id='.$id;?>">导出</a>
<p><?=$user_id?></p>
<p><?=$content?></p>
</body>
</html>