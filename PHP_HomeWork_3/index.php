<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TO_DO_SITE</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
		<!--кнопка выхода из системы -->
		<?php
			if (isset($_SESSION['user_id'])) {?>
				<form action="./pages/auth/login.php" method="post">
				<button type="submit" class="btn btn-outline-danger">
				<svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
				</button>
				</form>
			<?php }
			else {
				header('Location: pages/auth/login.php');
				exit();
			}
		?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>