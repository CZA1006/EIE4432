<?php
require_once("./config.php");

$id = $_POST['id'];

if ($_POST['reply'] == '') {
    echo "<script>alert('Please enter reply');location.href='noticeRespond.php?id=$id'</script>";
    die;
}


if ($_POST['reply']) {
    $reply = $_POST['reply'];
    $state = 'Completed';
} else {
    $state = 'Undetermined';
}


$sql = "update notices set `state` = '$state', `reply` = '$reply' where id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('success');location.href='noticeRespond.php?id=$id'</script>";
} else {
    echo "<script>alert('success')";
}
