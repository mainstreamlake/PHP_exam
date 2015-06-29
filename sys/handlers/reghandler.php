<?php

$login = filter_input(INPUT_POST, 'login');
$pass1 = filter_input(INPUT_POST, 'pass1');
$pass2 = filter_input(INPUT_POST, 'pass2');
$email = filter_input(INPUT_POST, 'email');
$status = filter_input(INPUT_POST, 'status');

//Любое регулярное выражение ограничивается двумя слэшами
$pattern1 = '/^[a-z][a-zA-Z0-9_-]{3,11}$/';
$pattern2 = '/^[a-zA-Z0-9_]{6,16}$/';
$pattern3 = '/^[a-z][a-zA-Z0-9_]*@[a-z]+\.[a-z]{1,3}$/';

require 'sys/classes/users.php';
$users = new Users();

if(!preg_match($pattern1, $login)) {
    echo '<span style="color: red">Неправильный формат логина</span>';
} elseif(!preg_match($pattern2, $pass1)) {
    echo '<span style="color: red">Неправильный формат пароля</span>';
} elseif(!preg_match($pattern3, $email)) {
    echo '<span style="color: red">Неправильный формат электронной почты</span>';
} elseif($pass1 != $pass2) {
    echo '<span style="color: red">Пароли не совпадают</span>';
} elseif($users->Search_L($login)){
    echo '<span style="color: red">Логин занят</span>';
} elseif(!$status){
    echo '<span style="color: red">Вы не выбрали свой статус</span>';
} else {
    $login_s = htmlspecialchars($login);
    $pass1_s = htmlspecialchars($pass1);
    $email_s = htmlspecialchars($email);
    $status = htmlspecialchars($status);
    $regdate = date('Y-m-d H:i:s');
    $pass = md5($pass1_s);
    $users->Add($login_s, $pass, $email_s, $status, $regdate);
    echo '<span style="color: green">Регистрация успешно завершена</span>';
}