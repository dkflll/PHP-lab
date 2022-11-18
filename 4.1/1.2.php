<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	// Вычисляем текущую дату в формате "день.месяц.год"
	$dat = date('d.m.Y');
	// Вычисляем текущее время
	$tm = date('h:i:s');
	echo 'Actual data: '.$dat. '<hr />';
	echo 'Actual time: '.$tm. '<hr />';
	?>
</body>
</html>