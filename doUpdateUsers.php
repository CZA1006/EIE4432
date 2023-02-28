<?php
require ("./config.php");
require ("./upload.php");

$user_id = trim($_POST['user_id']);
$nickname = trim($_POST['nickname']);
$email = trim($_POST['email']);
$id = $_POST['id'];

if ($_FILES['profileimage']['name'] != '') {
    $uploadRes = doUpload($_FILES);
    if ($uploadRes['code'] == 0 ) {
        echo "<script>alert(".$uploadRes['msg'].");location.href='home.php';</script>";
        die;
    } else {
        $profileimage = $uploadRes['file_path'];
        $sql = "update users set user_id = '$user_id',nickname = '$nickname', email = '$email', profileimage = '$profileimage' where id = '$id'";
        $result = mysqli_query($conn, $sql);
    }
} else {
    //未上传图片
    $sql = "update users set user_id = '$user_id',nickname = '$nickname', email = '$email'where id = '$id'";

    $result = mysqli_query($conn, $sql);
}

if ($result) {
    $findSql = "SELECT * FROM users WHERE id = '$id'";
    $findResult = mysqli_query($conn,$findSql);

    if (mysqli_num_rows($findResult)) {
        $findinfo = mysqli_fetch_array($findResult);

        setCookie('id',$findinfo['id'],time()+3600);
        setCookie('nickname',$findinfo['nickname'],time()+3600);
        setCookie('profileimage',$findinfo['profileimage'],time()+3600);

        setCookie('gender',$findinfo['gender'],time()+3600);
        setCookie('birthday',$findinfo['birthday'],time()+3600);
        setCookie('email',$findinfo['email'],time()+3600);
        setCookie('password',$findinfo['password'],time()+3600);
        setCookie('phone',$findinfo['phone'],time()+3600);
        setCookie('role',$findinfo['role'],time()+3600);
        setCookie('user_id',$findinfo['user_id'],time()+3600);
    }
    echo "<script>alert('update success');location.href='home.php';</script>";
} else {
    echo "<script>alert('update error');location.href='updateUsers.php';</script>";
}

