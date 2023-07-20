<?php
$id = $_GET['id'];

require 'config.php';
$request = $pdo->prepare('DELETE FROM clients WHERE `id`=:id');
$request->execute(['id'=>$id]);
header("Location:/");
?>