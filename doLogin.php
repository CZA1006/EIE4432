<?php
session_start();
require ("./config.php");
$params = $_POST;

$user_id = trim($_POST['user_id']);
$password = md5(trim($_POST['password']));

$findSql = "SELECT * FROM users WHERE user_id = '$user_id' AND password = '$password'";
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


    if ($info['user_id'] == 'admin') {

        echo '<script>alert("login success!");location.href="../admin/doLogin.php?id='.$info['id'].'";</script>';
    } else {
        echo '<script>alert("login success!");location.href="home.php";</script>';
    }

} else {

    echo '<script>alert("login error!");location.href="home.php";</script>';
}
