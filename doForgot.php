<?php
include_once("./config.php");
$user_id = trim($_POST['user_id']);
$password = trim($_POST['password']);
$email =  trim($_POST['email']);

if ($user_id == '') {
    echo "<script>alert('Please enter user_id');location.href='forgot.php';</script>";
    die;
}

if ($user_id == 'admin') {
    echo "<script>alert('The administrator cannot change the password');location.href='forgot.php';</script>";
    die;
}

if ($password == 'password') {
    echo "<script>alert('Please enter password');location.href='forgot.php';</script>";
    die;
}

if ($email == 'email') {
    echo "<script>alert('Please enter email');location.href='forgot.php';</script>";
    die;
}


$findSql = "select * from users where email = '$email' and user_id='$user_id'";

$result1 = mysqli_query($conn, $findSql);



if (!mysqli_num_rows($result1)) {
    echo "<script>alert('Email error');location.href='forgot.php';</script>";
    die;
}


$password = md5(trim($_POST['password']));

$sql = "update users set password = '$password' where user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('success');location.href='login.php';</script>";
} else {
    echo "<script>alert('error');</script>";
}
