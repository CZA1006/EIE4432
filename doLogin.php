<?php
session_start();
require ("./config.php");

$id = $_GET['id'];

$findSql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn,$findSql);

if (mysqli_num_rows($result)) {
    $info = mysqli_fetch_array($result);

    setCookie('id',$info['id'],time()+3600);
    setCookie('nickname',$info['nickname'],time()+3600);
    setCookie('profileimage',$info['profileimage'],time()+3600);

    setCookie('gender',$info['gender'],time()+3600);
    setCookie('birthday',$info['birthday'],time()+3600);
    setCookie('email',$info['email'],time()+3600);
    setCookie('password',$info['password'],time()+3600);
    setCookie('phone',$info['phone'],time()+3600);
    setCookie('role',$info['role'],time()+3600);
    setCookie('user_id',$info['user_id'],time()+3600);

    echo '<script>location.href="home.php";</script>';
} else {
    echo '<script>location.href="home.php";</script>';
}
