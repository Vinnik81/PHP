<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TO_DO_SITE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!--какую страницу авторизацию, или регистрации,  или личный кабинет -->
		
		<?php
		require_once '/project/PHP/TO_DO_SITE/config.php';

		if (!!($_SESSION['user_id']??false)) {?>
			<!-- отображать личный кабинет-->
			<h1>Welcom back</h1>
		<?php }
			else if (htmlspecialchars($_COOKIE["action"]) == 'registration_succesful') { // проверку хеша
				header('Location: pages/auth/login.php');
		 }
		else {
			header('Location: pages/registration/registration.php');
		}
		?>
</body>
</html>