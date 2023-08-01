<?php
//ПЛАН
// подключить бд
// есть ли пользователь в бд?
// validation
// создаем пользователя

require_once '/project/PHP/TO_DO_SITE/config.php';

function is_correct_file() {
$upload_dir = '\project\PHP\PHP_HomeWork_3\images\\';
#$_FILES['name_attribute from form']['name']
$upload_filename = $upload_dir.basename($_FILES['avatar_img']['name']); // only filename
//echo $_FILES['avatar_img']['name']."<br>".$_FILES['avatar_img']['type'];
// print_r($_FILES);
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

function is_correct_username() {
    //проверку sql инъекции ДОБАВИТЬ
if (strlen($_POST['username']) <= 10 && strlen($_POST['username']) >= 4)
{
    return $_POST['username'];
}
echo "username must be from 4 to 10 symbol";
die;
}

function is_correct_password() {
    //проверку на сильный пароль
    if (strlen($_POST['password']) <= 10 && strlen($_POST['password']) >= 4)
    {
        return password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
    echo "password must be from 4 to 10 symbol";
    die;
}

$sqlrequest = $pdo->prepare("SELECT * FROM users WHERE `uername`=:username");
$sqlrequest->execute(['username' => $_POST['username']]);

if ($sqlrequest->rowCount() > 0) {
    echo "username has already used";
}
else {
    // validation block
    $sqlrequest = $pdo->prepare("INSERT INTO `users`(`username`, `password`, `avatar_img`) VALUES (:username, :password, :avatar_img)");
    $sqlrequest->execute([
        'username'=>is_correct_username(),
        'password'=>is_correct_password(), //password -  хеширование -> хэш всегда будет фиксированной длины
        'avatar_img'=>is_correct_file() // file
    ]);
    setcookie('action', 'registration_succesful'); // задавать куки лучше через hash
    header('Location: ../auth/login.php');
}
