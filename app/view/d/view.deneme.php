<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>
	<ul>
	<?php foreach ($userList as $user): ?>
		<li><?=$user["userName"]?></li>
	<?php endforeach ?>
	</ul>
</body>
</html>