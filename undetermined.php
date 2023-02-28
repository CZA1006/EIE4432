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
        $sql = "SELECT * FROM  `notices` where state = 'Undetermined' ORDER BY `date_time` DESC  ";

        $result = mysqli_query($conn, $sql);

        ?>



    <div style="width:1400px;margin:30px auto;min-height:760px;overflow:auto;">
        <table style="border:1px solid #fff;color:#fff;text-align: center;">
            <tr style="border:1px solid #fff;">
                <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                    user_id
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    nickname
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    type
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    Title
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    Describe
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    Date
                </td>
                <td style="border:1px solid #fff;width:200px;">
                    Address
                </td>
                <td style="border:1px solid #fff;width:100px;">
                    Contacts
                </td>
                <td style="border:1px solid #fff;width:100px;">
                    Image
                </td>
                <td style="border:1px solid #fff;width:100px;">
                    State
                </td>
                <td style="border:1px solid #fff;width:100px;">
                    Operation
                </td>
            </tr>
            <?php
            while($info = mysqli_fetch_array($result)){
                ?>
                    <tr style="border:1px solid #fff;">
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php
                            $user_id = $info['user_id'];
                            $userSql = "SELECT *  FROM `users` WHERE `id` = '$user_id' ";

                            $userResult = mysqli_query($conn,$userSql);
                            if(mysqli_num_rows($userResult)){
                                $userInfo = mysqli_fetch_array($userResult);
                                echo $userInfo['nickname'];
                            }
                            ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php
                                $user_id = $info['user_id'];
                                $userSql = "SELECT *  FROM `users` WHERE `id` = '$user_id' ";

                                $userResult = mysqli_query($conn,$userSql);
                                if(mysqli_num_rows($userResult)){
                                    $userInfo = mysqli_fetch_array($userResult);
                                    echo $userInfo['nickname'];
                                }
                            ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['mold']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['title']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['descs']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['date_time']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['address']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['contacts']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <img src="../<?php echo $info['img_path']; ?>" style="margin-top:10px;width:50px;height:30px;line-height:30px;" />
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <?php echo $info['state']; ?>
                        </td>
                        <td style="border:1px solid #fff;width:100px;height:30px;line-height:30px;">
                            <a class="view" href="./view.php?id=<?php echo $info['id']; ?>">view</a>
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

