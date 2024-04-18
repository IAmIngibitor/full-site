<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
        }
    }
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            unset($pass);
        }
    }
    if (empty($login) or empty($pass)) 
    {
        exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    include("dbconnect.php");
    $result = $conn->query("SELECT ID FROM users WHERE login = '$login'");
    $row = $result->fetch_assoc();
    if (!empty($row)) {
        exit("Введенный вами догин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = $conn->query("INSERT INTO users (Name, Login, Pass) VALUES('$name', '$login', '$pass')");
    
?>