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
	$name = [];
		$name[0] = 'Саша';
		$name[1] = 'Миша';
		$name[2] = 'Ваня';
		$name[3] = 'Аня';
		$name[4] = 'Костя';
	echo $name[3]. '<br />';

	$name = [
		0 => 'Саша',
		1 => 'Миша',
		2 => 'Ваня',
		3 => 'Аня',
		4 => 'Костя'
	];
	echo $name[3]. '<br />';

	$name = [];
		$name[] = 'Саша';
		$name[] = 'Миша';
		$name[] = 'Ваня';
		$name[] = 'Аня';
		$name[] = 'Костя';
	echo $name[3]. '<br />';

	$name = [
		'Саша',
		'Миша',
		'Ваня',
		'Аня',
		'Костя'
	];
	echo $name[3]. '<br />';
	?>
</body>
</html>