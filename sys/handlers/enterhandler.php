<?php

$login = filter_input(INPUT_POST, 'login');
$pass1 = filter_input(INPUT_POST, 'pass1');
$passw = md5($pass1);

require 'sys/classes/users.php';
$users = new Users();

$records = $users->Search_LP($login, $passw);
if(!$records) {
    echo '<span style="color: red">Пользователь не найден</span>';
} else {
    echo '<span style="color: green">Пользователь найден</span>';
    $_SESSION['user'] = $login;
    $remember = filter_input(INPUT_POST, 'remember');
    if($remember) {
        $_COOKIE['user'] = $login;
    }
    //header("Location: main");
    echo '<script>';
    echo 'window.location = "main"';
    echo '</script>';
        
}


