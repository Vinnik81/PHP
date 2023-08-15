<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="conteiner" style="background-image: url('/images/kosmonavt_luna_otdyh.jpg'); background-size: cover; height: 900px;">
  <nav class="navbar navbar-expand-lg bg-primary-subtle border border-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand text-primary-emphasis" href="#">Панель навигации</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-primary-emphasis" aria-current="page" href="./registration.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary-emphasis" href="./do_register.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger-emphasis" href="../auth/login.php">Выход</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <form method="post" action="do_register.php" enctype="multipart/form-data">
    <label for="username" class="form-label">Username: </label> <br>
    <input type="text" class="form-control w-50" id="username" name="username" placeholder="Enter Username">
    <label for="password" class="form-label">Password: </label> <br>
    <input type="password" class="form-control w-50" id="password" name="password" placeholder="Enter Password"> <br>
    <label for="avatar_img" class="form-label">Avatar: <input type="file" class="btn btn-outline-warning" id="avatar_img" name="avatar_img"> </label> <br>
    <button type="submit" class="btn btn-outline-primary" value="registration">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-windows" viewBox="0 0 16 16">
  <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
</svg>
</button>
    <a href='../auth/login.php'><button type="button" class="btn btn-outline-success" value="login">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
    </button></a>

    </form>
  </div>

  <footer>
<div class="d-flex justify-content-evenly bg-primary border border-primary-subtle">
	<h6>ToDoSite 2023</h6>
	<a class="text-primary-emphasis" href="https://omsk.top-academy.ru">Company: Academy TOP</a>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>