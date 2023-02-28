<?php
require ("./config.php");
require ("./upload.php");

try {


    if ($_FILES['profileimage']['name'] == '') {
        $uploadRes = [
            'file_path' => '',
            'code' => 0,
            'msg' => '',
        ];
        echo "<script>alert('Please upload Profile Image');location.href='signup.php';</script>";
    } else {
        if ($_FILES['profileimage']['size'] > (1024*1024*2)) {
            echo "<script>alert('This picture is too large, please upload a picture within 2 MB');location.href='signup.php';</script>";
            die;
        }

        $uploadRes = doUpload($_FILES);
    }


    if ($uploadRes['code'] == 0 ) {
        $msg = $uploadRes['msg'];
        echo "'<script>alert('".$msg."');location.href='signup.php';</script>";
    } else {

        if (trim($_POST['user_id']) == '') {
            echo "<script>alert('Please enter User Id');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['nickname']) == '') {
            echo "<script>alert('Please enter Nickname');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['gender']) == '') {
            echo "<script>alert('Please choice Gender');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['birthday']) == '') {
            echo "<script>alert('Please enter Birthday');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['email']) == '') {
            echo "<script>alert('Please enter Email');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['phone']) == '') {
            echo "<script>alert('Please enter Phone Number');location.href='signup.php';</script>";
            die;
        }

        if (trim($_POST['password']) == '') {
            echo "<script>alert('Please enter password');location.href='signup.php';</script>";
            die;
        }

        $user_id = trim($_POST['user_id']);
        $nickname = trim($_POST['nickname']);
        $profileimage = $uploadRes['file_path'];
        $gender = trim($_POST['gender']);
        $birthday = $_POST['birthday'];
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = md5(trim($_POST['password']));
        $role = 'user';

        $findSql = "SELECT * FROM users WHERE user_id = '$user_id'";

        $findRes = mysqli_query($conn,$findSql);

        if (mysqli_num_rows($findRes)) {
            header("location:login.php?signup=false");
            die;
        } else {


    $conn=mysqli_connect("localhost","root","","Project");
    mysqli_query($conn,"SELECT * FROM users");
    mysqli_query($conn,"INSERT INTO `users`(`nickname`, `profileimage`, `gender`, `birthday`, `email`, `phone`,`password`,`role`,`user_id`) VALUES ('$nickname','$profileimage','$gender','$birthday','$email','$phone','$password','$role','$user_id')");

            header("location:login.php" );
            die;
        }
    }
} catch(Exception $e) {
    echo $e->getMessage();die;
}
?>
