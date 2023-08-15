<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTORISATION</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="conteiner" style="background-image: url('/images/imageLogin.jpg'); background-size: cover; height: 900px;">
  <nav class="navbar navbar-expand-lg bg-primary-subtle border border-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand text-primary-emphasis" href="#">Панель навигации</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-primary-emphasis" aria-current="page" href="./login.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary-emphasis" href="../registration/registration.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger-emphasis" href="/logout.php">Выход</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <h1 class="text-warning-emphasis">AUTORISATION</h1>
    <form method="post" action="do_login.php">
        <div class="md-3">
        <label for="username" class="form-label text-warning-emphasis">username: </label>
        <input type="text" class="form-control w-50" id="username" name="username" placeholder="Enter Username">
        </div>
        <br>
    <div class="md-3">
    <label for="password" class="form-label text-warning-emphasis">password: </label>
    <input type="password" class="form-control w-50" id="password" name="password" placeholder="Enter Password">
    </div>
    <br>
    <button type="submit" class="btn btn-outline-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
    </button>
    <a href='../registration/registration.php'><button type="button" class="btn btn-outline-primary" value="registration">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
</button>
</a>

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