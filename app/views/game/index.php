<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	I am here!!
	<table>
		<?php foreach($users as $user)?>
			<tr>
				<td><?=$user['user']?></td>
				<td><?=$user['counted']?></td>
			</tr>
		<?php endforeach?>
	</table>
</body>
</html>