<?
    $connect = mysqli_connect('localhost', 'u1389869_stud', 'nQ9uA7', 'u1389869_st' );
    mysqli_set_charset($connect, 'utf8');

    if ($connect->connect_error) {
        die("Ошибка: $connect->connect_error");
    }

    $query = mysqli_query($connect, 'SELECT * FROM messenger');
    echo mysqli_error($connect);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мессенджер</title>
    <style>
        body {
            font-family: monospace;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }
        h1 {
            text-align: center;
        }
        a, a:visited {
            color: wheat;
            font-size: 12px;
        }
        .chat-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 5px auto;
            box-shadow: 0 0 3px 3px #d4c2e2;
            padding: 5px 10px;
            width: 1000px;
        }
        .chat {
            padding: 10px;
            border: 2px groove #a9a9a96b;
            display: flex;
            flex-flow: column wrap;
            flex-direction: column;
        }

        .chat-row p {
            overflow-wrap: anywhere;
        }
        form {
            margin: 5rem 15rem 1rem;
            box-shadow: 0 0 4px 4px #00000057;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }
        .message {
            display: none;
        }
        .message:hover {
            display: flex;
        }
    </style>
</head>
<body>
<h1>Мессенджер</h1>
<div class="chat">
    <?
        if ($query && mysqli_num_rows($query) > 0){
        for ($i=0; $i < mysqli_num_rows($query); $i++){
        $chat_row = mysqli_fetch_array($query);
        $id = $chat_row['id'];
        $message = $chat_row['message'];
        $author = $chat_row['author'];
        $datetime = $chat_row['datetime'];
                ?>
                    <form class="chat-row" action="update.php" method="post">
                        <p><?="$datetime [<b>$author</b>]:"?></p>
                        <p><?=$message?></p>
                        <p class="message"><input type="text" name="message"></p>
                        <a href="delete.php?id=<?=$id?>">Удалить</a>
                        <p><input type="hidden" name="id" value="<?= $id ?>"></p>
                        <p><input type="submit" value="Изменить"></p>
                    </form>
                <?
            }
        } else {
            echo "Ошибка: $connect->error";
        }
    ?>
    <form action="insert.php?{$id}" method="post">
        <p>Имя отправителя: <input type="text" name="author"></p>
        <p>Сообщение: <input type="text" name="message"></p>
        <p><input type="submit"></p>
    </form>
</div>
</body>
</html>
