<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="60"> <!-- Обновление страницы каждую минуту -->
    <title>Питомец</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-color: blueviolet;">
    <div class="container">
        <h1>Питомец</h1>
        
        <div class="attributes">
            <?php
            require_once('pet.php');

            $pet = new Pet();
         
     
        $currentTime = time();
        $oneMinuteLater = $currentTime + 60;
        
        

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $command = $_POST['command'];
        if ($command == "играть") {
            $pet->play();
        } elseif ($command == "кормить") {
            $pet->feed();
        } elseif ($command == "спать") {
            $pet->sleep();
        } elseif ($command == "бессмертие") {
            $pet->setIsnormal(true);
        }
        else {
            echo "Неверная команда!";
        }
    }
    if ($oneMinuteLater)
    $pet->decreaseAttributes();

echo date('Y-m-d H:i:s', $oneMinuteLater);
    ?>
<?php
$pet->showAttributes();

?>
<img src="./images/1681578146_5.png" class="card-img-top w-75" alt="...">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        
        <input type="submit" value="играть" name="command" class="btn btn-primary" style="width: 150px; height: 70px">
        <input type="submit" value="кормить" name="command" class="btn btn-success" style="width: 150px; height: 70px">
        <input type="submit" value="спать" name="command" class="btn btn-info" style="width: 150px; height: 70px">
        <input type="submit" value="бессмертие" name="command" class="btn btn-danger" style="width: 150px; height: 70px">
        <br>
    </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>