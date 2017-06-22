<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="more">
	     <div class="single_item">
	           <div class="element_head">
	               <div class="date"></div>
	               <div class="author"></div>
	            </div>
	            <div class="content"></div>
	     </div>
	     <a href="javascript:;" class="get_more">::点击加载更多内容::</a>
	</div>
	<input type="hidden" id="page" value="2">
	<ul>
		<?php foreach($list as $li):?>
		<li><strong><?=$li['det_title']?></strong><br/><?=$li['det_descript']?></li>
		<?php endforeach;?>
		<?=$link?>
	</ul>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.more.js"></script>
<script type="text/javascript">
	$(function(){
	    $('#more').more({'address': 'data.php'})
	});
</script>
</body>
</html>