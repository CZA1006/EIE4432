<?php
    date_default_timezone_set('PRC');

    $localhost = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbname = 'Project';


    $conn = mysqli_connect($localhost, $user, $pwd, $dbname) or die("connection failed:" . mysqli_connect_error());
    mysqli_query($conn, 'set names utf8');

?>
