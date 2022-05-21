<?php
    session_start();
    $login = $_POST['login'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (isset($name)) {
        $_SESSION['username'] = $name;
    }

    $connect = mysqli_connect('localhost', 'u1389869_stud', 'nQ9uA7', 'u1389869_st');
    mysqli_set_charset($connect, 'utf8');

    if ($connect) {
        $query = mysqli_query($connect, "INSERT INTO users (login, name, password) VALUES ('{$login}', '{$name}', '{$password}')");
    }else{
        print_r(mysqli_error($connect));
    }

    if ($query) {
        header("Location: https://breakover.ru/u/m.vesel/works/registration/?response=success");
    }else{
        header("Location: https://breakover.ru/u/m.vesel/works/registration/?response=error");
    }
    mysqli_close($connect);
    exit;
?>