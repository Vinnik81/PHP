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
        <h1>Edit</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Name: </label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
    
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age: </label>
    <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age">
  </div>
  <button type="submit" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg></button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$regexName = '/^[a-zA-Z\s]+$/';
$regexAge = '/^([1-9][0-9]?|1[01][0-9]|120)$/';

if (isset($id)){
    require 'config.php';
    $requestName = $pdo->prepare('UPDATE clients SET `name`=:name  WHERE `id`=:id');
    $requestAge = $pdo->prepare('UPDATE clients SET `age`=:age  WHERE `id`=:id');
    
    if (isset($name) && preg_match($regexName, $name)) {
        $requestName->execute(['name' => $name, 'id' => $id]);  
    }
    
    if (isset($age) && preg_match($regexAge, $age)) {
        $requestAge->execute(['age' => $age, 'id' => $id]);
    }

    header('Location: /');
    exit;
}
}

?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html> 