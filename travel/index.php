<?php
      session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Сайт туристической компании</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="body-top">
    <header class="container">
      <div class="row">
        <div class="col-3">
          <img id="logo" src="img/logo.jpg">
        </div>
        <div class="col-9">
          <h1>Путешествуйте с нами!</h1>
        </div>
      </div>
      <?php
      if (empty($_SESSION['login']) or empty($_SESSION['id']))
      {
    ?>
    <div id = "auth_block">
        <div id = "link_register">
          <a href="registr.php">Регистрация</a>
        </div>
        <div id = "link_auth">
          <a href="avtor.php">Авторизация</a>
        </div>
    </div>
    <?php
      }
      else
      {
    ?>
    <div id = "exit_block">
      <div id = "link_remark">
        <a href="remarks.php">Вы можете оставить отзыв</a>
      </div>
      <div id = "link_exit">
        <a href="exit.php">Выход</a>
      </div>
    </div>
    <?php
      }
    ?>
    </header>
    <div id="menu">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link" href="index.php">Главная</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="tours.html">Наши туры</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="contacts.html">О нас</a>
      </nav>
    </div>
    <main class="flex">
      <div class="row">
        <div class="col">
          Наши акции
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="tour">
            <img src="img/crimea.jpg">
            <p>
              <a class="flex-sm-fill text-sm-center nav-link" href="#">Подробнее об акции</a>
            </p>
          </div>
        </div>
        <div class="col">
          <div class="tour">
            <img src="img/kavkaz.jpg">
            <p>
              <a class="flex-sm-fill text-sm-center nav-link" href="#">Подробнее об акции</a>
            </p>
          </div>
        </div>
        <div class="col">
          <div class="tour">
            <img src="img/altay.jpg">
            <p>
              <a class="flex-sm-fill text-sm-center nav-link" href="#">Подробнее об акции</a>
            </p>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="row">
        <div class="col">
          Это сайт, предназначенный для обучения
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>