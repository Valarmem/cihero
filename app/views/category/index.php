<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" width="80%">
	<tr>
		<td>id</td>
		<td>标签名</td>
		<td>操作</td>
	</tr>
	<form action="" method="post">
		<input type="text" name="name">
		<button>新增</button>
	</form>
		<a href="">批量增加</a>
		<a href="">批量删除</a>
	<?php if ($categories!=null):?>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?=$category['id']?></td>
		<td><?=$category['name']?></td>
		<td>
			<form action="<?=site_url('Category/delete')?>" method="post">
				<input type="hidden" name="id" value="<?=$category['id']?>">
				<button>删除</button>
			</form>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php else:?>
	<tr>
		<td colspan="3">暂无标签</td>
	</tr>
	<?php endif;?>
</table>
</body>
</html>