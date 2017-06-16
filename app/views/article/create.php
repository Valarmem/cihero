<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/form.css">
</head>
<body>
	<form action="" method="post" class="basic-grey">
		<h1>创建文章</h1>
		<label>
			<span>标题</span>
			<input id="title" type="text" name="title" placeholder="" value="<?php echo isset($post['title'])?$post['title']:'';?>" />
		</label>
		<label>
			<span>内容 :</span>
			<textarea id="content" name="content" placeholder=""><?php echo isset($post['title'])?$post['title']:'';?></textarea>
		</label>
		<label>
			<span>分类 :</span>
			<select name="category_id">
				<?php if (isset($categories)): ?>
				<?php foreach($categories as $category): ?>
					<option value="<?=$category['id']?>"><?=$category['name']?></option>
				<?php endforeach; ?>
				<?php else: ?>
					<option>暂无分类</option>
				<?php endif;?>
			</select>
		</label>
		<label>
			<span>&nbsp;</span>
			<input type="submit" class="button" value="创建" />
		</label>
	</form>
</body>
</html>