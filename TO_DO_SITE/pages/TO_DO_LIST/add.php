<?php
    //логика добавления задачи
    //перенапрелние обратно на главную страницу
    $task = $_POST['task']; //вытащить значение из поля input
    $regex = '/^$/';

    if(preg_match_all($regex, $task)){
        header("Location:/?error=empty_input");
    }
    else{
        require_once '/project/PHP/TO_DO_SITE/config.php';
        $request = $pdo->prepare('INSERT INTO tasks(task, id_user) VALUES (:task, :id_user);');
        $request->execute(['task'=>$task, 'id_user'=>$_SESSION['user_id']]);
        header("Location:/pages/TO_DO_LIST/index.php");
    }
?>