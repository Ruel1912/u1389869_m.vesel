<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'u1473458_optym', 'Hasdfs11232', 'u1473458_me');
        mysqli_set_charset($connect, "utf-8");
        $news = mysqli_query($connect, 'SELECT * FROM news');
        if  ($news == false) {
            echo "<p>Не работает</p>";
        }
    ?>

</body>
</html>