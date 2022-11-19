<?php
	switch($_GET['Tovar'][0]) {
		case "1":
			$sum = $_GET['K'] * 20;
			break;
		case "2":
			$sum = $_GET['K'] * 15;
			break;
		case "3":
			$sum = $_GET['K'] * 10;
			break;
}
if ($_GET['DK'] == "on") {
	$sum=$sum-$sum*0.05;
	echo "Вы получаете скидку в размере 5 $";
}
?>
<html>
<head>
</head>
<body>
	<p>Сумма покупки: <? echo $sum;?> y.e. </p>
</body>
</html>