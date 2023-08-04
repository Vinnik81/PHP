<?php
    //логика удаления задачи
    //перенапрелние обратно на главную страницу
    $id = $_GET['id'];

    require_once '/project/PHP/TO_DO_SITE/config.php';
    $request = $pdo->prepare('DELETE FROM tasks WHERE `id`=:id');
    $request->execute(['id'=>$id]);
    header("Location:/pages/TO_DO_LIST/index.php");
?>