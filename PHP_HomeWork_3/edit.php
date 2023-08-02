<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PAGE</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Page</h1>
<form method="post" action="" enctype="multipart/form-data">
    <label for="avatar_img" class="form-label">Avatar: <input type="file" class="btn btn-outline-warning" id="avatar_img" name="avatar_img"> </label> <br>
    <button type="submit" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg></button>
    </form>

    <?php
require_once '/project/PHP/TO_DO_SITE/config.php';

function is_correct_file() {
    $upload_dir = '\project\PHP\PHP_HomeWork_3\images\\';
    
    $upload_filename = $upload_dir.basename($_FILES['avatar_img']['name']); // only filename
    
    if ($_FILES['avatar_img']['type'] != 'image/jpeg' && $_FILES['avatar_img']['type'] != 'image/png' && $_FILES['avatar_img']['type'] != 'image/gif') {
        echo "type must be only jpg, png, gif";
        die; //остановка выполнения дальнейшего скрипта
    }
    if ($_FILES['avatar_img']['size'] > 5*1024*1024) {
        echo "size should be 5 MB or lower";
        die;
    }
    if (move_uploaded_file($_FILES['avatar_img']['tmp_name'], $upload_filename)) {
        return basename($_FILES['avatar_img']['name']);
    }
    echo 'smth wrong';
    die;
    }
       
    $sqlrequest = $pdo->prepare('UPDATE users SET `avatar_img` = :avatar_img WHERE `id` = :id');
    $sqlrequest->execute(['avatar_img' => is_correct_file(), 'id' => $_SESSION['user_id']]);
    header("Location: /");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
