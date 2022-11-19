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
	$box = array('Персик','Огурец');
	list($fruit, $vegetable) = $box;
	echo '<br />'.$fruit. '<br />'.$vegetable;
	?>
</body>
</html>