<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.article {
			margin: 0 auto;
			width: 60%;
		}
		.add {
			float: right;
		}
	</style>
</head>
<body>
<div class="article">
	<div class="button">
		<a href="<?=site_url('article/create')?>" class="add">添加文章</a>
	</div>
	<table border="1" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>分类</th>
			<th>内容</th>
			<th>操作</th>
		</tr>
		<form method="post">
			<button type="submit" name="empty" value="empty">清空文章</button>
			<?php foreach($articles as $article) : ?>
			<tr>
				<td><?=$article['id']?></td>
				<td><?=$article['title']?></td>
				<td><?=$categories[$article['category_id']]?></td>
				<td><?=$article['content']?></td>
				<td>
				<a href="<?=site_url('article/edit').'?id='.$article['id']?>">修改</a>
				<form action="<?=site_url('Article/delete')?>" method="post">
				<input type="hidden" name="id" value="<?=$article['id']?>">
				<button>删除</button></form>
				</td>
			</tr>
			<?php endforeach; ?>
		</form>
	</table>
</div>
</body>
</html>