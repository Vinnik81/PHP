<?php
$name = $_POST['name'];
$age = $_POST['age'];
$regexName = '/^[a-zA-Z\s]+$/';
$regexAge = '/^([1-9][0-9]?|1[01][0-9]|120)$/';

if(!preg_match_all($regexName, $name)){
header("Location:/?error=empty_name");
}
else if(!preg_match_all($regexAge, $age)){
    header("Location:/?error=empty_age");
}
else {
    require 'config.php';
    $request = $pdo->prepare('INSERT INTO clients(name, age) VALUES (:name, :age);');
    $request->execute(['name'=>$name, 'age'=>$age]);
    header("Location:/");
}
?>