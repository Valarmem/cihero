<!DOCTYPE html>
<html>
<head>
	<title>成绩表</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" width="80%">
	<tr>
		<td>ID</td>
		<td>姓名</td>
		<td>学科</td>
		<td>成绩</td>
		<td>操作</td>
	</tr>
	<?php foreach($list as $item): ?>
	<tr>
		<td><?=$item['id']?></td>
		<td><?=$item['username']?></td>
		<td><?=$item['subject']?></td>
		<td><?=$item['score']?></td>
		<td><a href="<?=site_url('score/edit').'/'.$item['id']?>">修改</a><form><button>删除</button></form></td>
	</tr>
	<?php endforeach;?>
	<form>
		<div class=" form-group row">
            <label class="col-sm-2 control-label">登录账号:</label>
            <div class="col-sm-10">
                <input type="text" name="username" disabled="disabled" readonly="readonly" class="form-control" value="<{$data.username}>" required>
            </div>
        </div>

        <div class=" form-group row">
            <label class="col-sm-2 control-label">游戏ID:</label>
            <div class="col-sm-10">
                <input type="text" name="game_id" disabled="disabled" readonly="readonly" class="form-control" value="<{$data.game_id}>" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 control-label">真实姓名:</label>
            <div class="col-sm-10">
                <input name="real_name" type="text"  class="form-control" value="<{$data.real_name}>" required>
                <{form_error('real_name')}>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 control-label">手机号码:</label>
            <div class="col-sm-10">
                <input name="phone"  type="text"  class="form-control" value="<{$data.phone}>" required>
                <{form_error('phone')}>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 control-label">微信号:</label>
            <div class="col-sm-10">
                <input name="weixin" type="text"  class="form-control" value="<{$data.weixin}>">
                <{form_error('weixin')}>
            </div>
        </div>

	</form>
</table>
</body>
</html>