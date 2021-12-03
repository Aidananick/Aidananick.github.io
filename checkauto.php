<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$password = md5($password."asdfgh4562");

$mysql = new mysqli('localhost','root','root','register-bg');

$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `name`='$name' AND `password`='$password'");
$user=$result->fetch_assoc();
if(count($user)==0){
    echo "Такой пользаватель не найден";
exit();
}

setcookie('user', $user['name'],time()+360,"/");

$mysql->close();
header('Location: index1.php');
?>