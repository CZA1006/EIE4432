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
        $mold = 'FOUND';
        if(!isset($_COOKIE['id'])) {
            echo "<script>alert('Please login');location.href='login.php'</script>";
            die;
        }
        $sql = "SELECT * FROM  `notices` WHERE `mold` = '$mold' ORDER BY   `date_time` DESC";
        $result = mysqli_query($conn, $sql);

       ?>

    <div style="width:1400px;margin:30px auto;min-height:760px;overflow:auto;">
        <?php
            while($info = mysqli_fetch_array($result)){
        ?>
        <div style="margin:20px;float:left;border-radius:10px;box-shadow: 0px 0px 8px 0px rgb(0 0 0 / 8%);padding-bottom:15px;width: 300px; height: 350px;border:1px solid #fff;background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%);">
            <div style="margin:10px auto;width:260px;height:200px;">
                <img src="../<?php echo $info['img_path'] ?>" style="width:260px;height:200px;"/>
            </div>
            <div style="ext-overflow: ellipsis;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;overflow: hidden;/*! autoprefixer: off */-webkit-box-orient: vertical;/*! autoprefixer: on */word-break: break-all ;color:#fff;margin:15px;height:40px;line-height:20px;width:260px;">
                <?php echo $info['title'] ?>
            </div>
            <span style="color:#00f7ff">&emsp;<?php echo $info['state'] ?></span>
            <div style="margin-left:15px;margin-right:15px;color:#fff;height:30px;line-height:20px;width:260px;">
                <span><?php echo $info['date_time'] ?>&emsp;<?php echo $info['mold'] ?></span>
            </div>

            <div  style="margin-left:15px;margin-right:15px;color:#fff;height:30px;line-height:20px;width:260px;">
                <a class="btn" href="./noticeRespond.php?id=<?php echo $info['id'] ?>" style="padding:5px;text-decoration: none;">Respond</a>
                &emsp;
                <a class="btn" href="./noticeView.php?id=<?php echo $info['id'] ?>" style="padding:5px;text-decoration: none;">View</a>
            </div>
        </div>
                <?php
            }
        ?>
    </div>


</div>

</body>
</html>

