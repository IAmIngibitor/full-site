<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Регистрация</title>
    </head>
    <body class="body-top">
        <header>
            <h2>Регистрация</h2>
        </header>
        <form action="save_user.php" method="post">
            <p>
                <label>Ваше имя:</label>
                <input name="name" type="text" size="15" maxlength="15">
            </p>
            <p>
                <label>Ваш логин:</label>
                <input type="text" name="login" size="15" maxlength="15">
            </p>
            <p>
                <label>Ваш пароль:</label>
                <input type="password" name="pass" size="15" maxlength="15">
            </p>
            <p class="submit-btn">
                <input class="btn" type="submit" name="submit" value="Зарегистрироваться">
            </p>
        </form>
    </body>
</html>