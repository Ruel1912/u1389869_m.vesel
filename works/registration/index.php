<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <style>
        body {
            font-family: monospace;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }
        h1, h2{
            text-align: center;
        }
        a, a:visited {
            color: wheat;
            font-size: 12px;
        }
        form {
            margin: 5rem 15rem 1rem;
            box-shadow: 0 0 4px 4px #00000057;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
    </style>
</head>
<body>
<h1>Регистрация</h1>
    <form action="insert.php" method="post">
        <p>Логин: <input type="text" name="login"></p>
        <p>Имя: <input type="text" name="name"></p>
        <p>Пароль: <input type="password" name="password"></p>
        <p><input type="submit" value="Регистрация"></p>
    </form>
</body>
</html>
 