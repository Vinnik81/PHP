<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Клиенты</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Клиенты</h1>
    <form>
  <div class="mb-3">
    <label for="name" class="form-label">Name: </label>
    <input type="name" class="form-control" id="name" placeholder="Введите имя">
    
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age: </label>
    <input type="age" class="form-control" id="age" placeholder="Введите возраст">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
<?php
/*-----------------------Созданя таблицы------------------*/
// try{
// require 'config.php';
// $pdo->exec("CREATE TABLE `clients` (
//     `id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     `name` varchar(255) NOT NULL,
//     `age` int(11) UNSIGNED NOT NULL
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
// }
// catch(PDOException $e){
// die("Error:".$e->getMessage());
// }
require 'config.php';
?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> 

