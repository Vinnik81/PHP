<!DOCTYPE html>
<html>
<head>
    <title>Питомец</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    <div class="container">
        <h1>Питомец</h1>
        <div class="attributes">
            <?php
            require_once('pet.php');

            $pet = new Pet();

     
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
    ?>
    <!-- <script>
setInterval(function() {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'decreaseAttributes.php', false);
  xhr.send();
  alert('time');
  
}, 60000);
</script> -->
<script>
    setInterval(function() {
        $.ajax({
            url: 'decreaseAttributes.php',
            method: 'post',
            async:true,
            data: {
                var: 'value'
            },
            success:function(response) {
                console.log(response);
            }
        });
    }, 60000);
</script>
<?php
$pet->showAttributes();
}
?>
        </div>

        <form action="" method="POST">
        
            <input type="submit" value="играть" name="command" class="submit-button">
            <input type="submit" value="кормить" name="command" class="submit-button">
            <input type="submit" value="спать" name="command" class="submit-button">
            <input type="submit" value="бессмертие" name="command" class="submit-button">
            <br>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>
</html>