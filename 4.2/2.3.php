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
	$auto = [];
	$auto['bmw'] = [
		'color' => 'белый',
		'year' => 2005,
		'probeg' => 2000
	];
	$auto['audi'] = [
		'color' => 'синий',
		'year' => 2003,
		'probeg' => 2300
	];
	echo '<br /> Год BMW - '.$auto['bmw']['year'];
	echo '<br /> Год Audi - '.$auto['audi']['year'];
	?>
</body>
</html>