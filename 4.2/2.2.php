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
	$capital['Russia'] = 'Москва';
	$capital['USA'] = 'Вашингтон';
	$capital['France'] = 'Париж';
	$capital['Ukraine'] = 'Киев';
	$capital['Italy'] = 'Рим';
	echo $capital ['Russia'];

	$naselenie = array(
		'Russia' => 141,
		'USA' => 304,
		'France' => 63,
		'Ukraine' => 46,
		'Italy' => 59
	);
	echo '<br />Столица России '.$capital['Russia']. ', Население - '.$naselenie ['Russia']. ' млн. человек.';
	?>
</body>
</html>