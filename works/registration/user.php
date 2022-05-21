<?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "Имя пользователя: {$_SESSION['username']}";
    } else {
        echo "Не работает";
    }
?>