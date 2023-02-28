<?php
require ("./config.php");
require ("./upload.php");


if ($_FILES['profileimage']['name'] == '') {
    $uploadRes = [
        'file_path' => '',
        'code' => 0,
    ];
    echo "<script>alert('Please upload Profile Image');location.href='signup.php';</script>";die;
} else {
    if ($_FILES['profileimage']['size'] > (1024*1024*2)) {
        echo "<script>alert('This picture is too large, please upload a picture within 2 MB');location.href='signup.php';</script>";
        die;
    }
    $uploadRes = doUpload($_FILES);
}

$mold = $_POST['type'];
if ($mold == '') {
    echo "<script>alert('Please check a Type!');location.href='createNotice.php'</script>";die;
}

if ($_POST['title'] == '') {
    echo "<script>alert('Please enter Title!');location.href='createNotice.php'</script>";die;
}

if ($_POST['describe'] == '') {
    echo "<script>alert('Please enter Describe!');location.href='createNotice.php'</script>";die;
}

if ($_POST['date_time'] == '') {
    echo "<script>alert('Please choice Date!');location.href='createNotice.php'</script>";die;
}

if ($_POST['address'] == '') {
    echo "<script>alert('Please choice Address!');location.href='createNotice.php'</script>";die;
}



if ($_POST['contacts'] == '') {
    echo "<script>alert('Please choice Contacts!');location.href='createNotice.php'</script>";die;
}



$title = $_POST['title'];
$date_time = $_POST['date_time'];
$address = $_POST['address'];
$contacts = $_POST['contacts'];
$descs = $_POST['describe'];
$img_path = $uploadRes['file_path'];
$user_id = $_COOKIE['id'];
$state = 'Undetermined';

$insertSql = "INSERT INTO notices (title, user_id, mold, date_time, address, contacts, descs, img_path, state)VALUES ('$title','$user_id','$mold','$date_time','$address','$contacts','$descs','$img_path','$state')";


$res = mysqli_query($conn,$insertSql);

if ($res) {
    echo "<script>alert('success!');location.href='createNotice.php'</script>";die;
} else {
    echo "<script>alert('error!');</script>";die;
}

