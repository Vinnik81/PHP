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

		if (!!($_SESSION['user_id']??false)) {
			
				$sqlrequest = $pdo->prepare("SELECT * FROM `users` WHERE `id` = :id");
				$sqlrequest->execute(['id'=>$_SESSION['user_id']]);
				$user = $sqlrequest->fetch(PDO::FETCH_ASSOC);
				?>
			<!-- отображать личный кабинет-->
			<h1>Welcom back</h1>
			<table>
				<tr>
				<?php echo '<td><img style="width: 50px; height: 50px;" src="/images/'.$user['avatar_img'].'"></td>'?>
				<td><?php
				echo $user['username'];
				?></td>
			</tr>
			</table>
			
			<form method="post" action="do_logout.php">
				<input type="submit" value="Logout">
			</form>
			
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