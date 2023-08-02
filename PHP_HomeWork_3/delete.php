<?php
require_once '/project/PHP/TO_DO_SITE/config.php';
$sqlrequest = $pdo->prepare('DELETE FROM users WHERE `id` = :id');
$sqlrequest->execute(['id' => $_SESSION['user_id']]);
header("Location: pages/auth/login.php");
?>