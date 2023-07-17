<?php
/*----------------------Функция------------------------------------*/

// function printBalance($usd) {
//     $exchange = 89.96;
//     $results_rub = $usd * $exchange;
//     echo "было {$usd} стало {$results_rub}";
// }

// $usb = 100;
// printBalance($usb);

// function getBalance($usd) {
//     $exchange = 89.96;
//     $results_rub = $usd * $exchange;
//     return $results_rub;
// }

// $usd = 100;
// $result = getBalance($usd);
// echo "было {$usd} стало {$result}";
// echo "<br>было " .$usd." стало ".$result; //конкатынация строк

/*----------------------------PDO _ БД-------------------------------*/

// try{
//     $db = new PDO("mysql:host=localhost;dbname=test", 'root', ''); //("Имя СУБД:host=ХОСТ;dbname=ИМЯ БД", 'логин', 'пароль')
//     $db->exec("--
//     -- Структура таблицы `task` --
//     CREATE TABLE `tasks` (
//         `id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
//         `task` varchar(255) NOT NULL
//     ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
//     --
//     -- Дамп данных таблицы `tasks
//     --
//     INSERT INTO `tasks` (`id`, `task`) VALUES (1, 'Купить хлеб'), (2, 'hhhh');");
// }
// catch(PDOException $e) {
//     die("Error: ".$e->getMessage());
// }

//$db = new PDO("mysql:host=localhost;dbname=test", 'root', '');
$dsn = 'mysql:host=localhost;dbname=test';
$pdo = new PDO($dsn, 'root', '');
$id = 1;
// $sth1 = $pdo->query("SELECT * FROM `tasks` WHERE `id`=:id"); //Fatal error
// var_dump($sth1);
// while($r = $sth1->fetch(PDO::FETCH_OBJ)){
//     var_dump($r);
//     echo $r->task;
// }

// $query = $pdo->query("SELECT * FROM `tasks` WHERE `id`=".$id ); // обязательно обраные кавычки
// var_dump($query);
// $query->execute(); //Fatal error
// while($row = $query->fetch(PDO::FETCH_OBJ)) {
//     var_dump($row);
//     //echo $row->task;
// }

$query = $pdo->prepare("SELECT * FROM `tasks` WHERE `id`=:id"); // обязательно обраные кавычки
$query->bindParam(':id', $id);
var_dump($query);
$query->execute();
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    var_dump($row);
}
?>