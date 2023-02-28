<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lost and Found</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../js/login.js"></script>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color:#fff;
        }
        .dropdown-content a:hover {
            color:#00f7ff;
        }

        .btn{
            color:#fff;
        }

        .btn:hover{
            color:#00f7ff;
            background-color: #fff;
        }

        .a {
            color:#fff;
        }
        .a:hover {
            color:#00f7ff;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
        require_once("./base.php");
        require_once("./config.php");
        if (!isset($_COOKIE['id'])) {
            echo "<script>location.href='login.php';</script>";
        }
        $user_id = $_COOKIE['id'];
        $sql = "SELECT * FROM  `users`  ORDER BY   `nickname`  ";
        $result = mysqli_query($conn, $sql);

        ?>



    <div style="width:1400px;margin:30px auto;min-height:760px;overflow:auto;">
        <table style="border:1px solid #fff;color:#fff;text-align: center;">
            <tr style="border:1px solid #fff;">
                <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                    User id
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    nickname
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    emails
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    gender
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    birthday
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    profileimage
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    noticeNumber
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    responseNumber
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    operation
                </td>
            </tr>
            <?php
            while($info = mysqli_fetch_array($result)){
                ?>
                    <tr style="border:1px solid #fff;">
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['user_id']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['nickname']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['email']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['gender']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['birthday']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <img src="../<?php echo $info['profileimage']; ?>" style="margin-top:10px;width:50px;height:30px;line-height:30px;" />
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php
                                $user_id = $info['id'];
                                $noticeSql = "SELECT COUNT(*) AS 'total' FROM `notices` WHERE `user_id` = '$user_id' ";

                                $noticeResult = mysqli_query($conn,$noticeSql);
                                if(mysqli_num_rows($noticeResult)){
                                    $noticeInfo = mysqli_fetch_array($noticeResult);
                                    echo $noticeInfo['total'];
                                }

                            ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php
                                $user_id = $info['id'];
                                $state = 'Completed';
                                $noticeSql1 = "SELECT COUNT(*) AS 'total' FROM `notices` WHERE `state` = '$state' AND `user_id` = '$user_id'";

                                $noticeResult1 = mysqli_query($conn,$noticeSql1);
                                if(mysqli_num_rows($noticeResult1)){
                                    $noticeInfo1 = mysqli_fetch_array($noticeResult1);
                                    echo $noticeInfo1['total'];
                                }

                            ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <a class="a" style="text-decoration: none;" href="viewMyNotice.php?user_id=<?php echo $info['id']; ?>">view</a>
                        </td>
                    </tr>
                <?php
            }
            ?>
        </table>


    </div>

</div>
</body>
</html>

