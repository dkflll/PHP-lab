<?php
	define ("PAGE_TITLE", "Регистрация2");
?>
<html>
<head>
	<title><?= PAGE_TITLE ?></title>
</head>
<body>
	<p>Вы ввели:</p>
	<?php
	$usernamr = $_GET['name'];
	$password = $_GET['pword'];
	echo "<p>Имя пользователя =" . $usernamr . "</p>";
	echo "<p>Пароль =" . $password . "</p>";
	?>
</body>
</html>