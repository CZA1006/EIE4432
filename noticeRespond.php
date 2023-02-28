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

        .btnn:hover {
            color:#00f7ff;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    require_once("./base.php");
    require_once("./config.php");

    $id = $_GET['id'];
    $sql = "select * from notices where id = '".$id."'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)){
        $info = mysqli_fetch_array($result);
    }
    else{
        die("参数错误！");
    }
    ?>

    <div class="form" style="width: 900px; height: 760px; top: 100px; left: 400px; ">
        <div style="width: 600px;float:left;">
            <h2 style="width: 578px;">Respond </h2>
            <form action="doNoticeRespond.php" method="post" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr;">
                <input name="id" value="<?php echo $info['id']; ?>" style="display: none;"/>
                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="user_id">Type</label>
                    <input disabled type="text" value="<?php echo $info['mold']; ?>" class="link" style="color:#fff; padding-top: 5px;padding-left:10px;" id="user_id" name="user_id"/>
                </div>
                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="title">Title</label>
                    <input disabled type="text" class="link" value="<?php echo $info['title'];  ?>" style="color:#fff; padding-top: 5px;" id="title" name="title"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="descs">Describe</label>
                    <input disabled type="text" class="link" style="color:#fff; padding-top: 5px;" id="descs" name="descs" value="<?php echo $info['descs'];  ?>"/>
                </div>


                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="address">Contacts</label>
                    <input disabled type="text" class="link" style="color:#fff; padding-top: 5px;" id="contacts" name="contacts" value="<?php echo $info['contacts'];  ?>"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="address">Address</label>
                    <input disabled type="text" class="link" style="color:#fff; padding-top: 5px;" id="address" name="address" value="<?php echo $info['address'];  ?>"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="date">Date</label>
                    <input disabled type="text" class="link" style="color:#fff; padding-top: 5px;" id="date" name="date" value="<?php echo $info['date_time'];  ?>"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="state">State</label>
                    <input disabled type="text" class="link" style="color:#fff; padding-top: 5px;" id="state" name="state" value="<?php echo $info['state'];  ?>"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="reply">Reply</label>
                    <div style="margin-top:20px;height:70px;margin-left:-100px;">
                        <textarea placeholder="Please enter" style="padding-top:10px;padding-left:10px;font-size:16px;border:1px solid #00f7ff;color:#fff;background:transparent;width:310px;height:70px;" name="reply" type="text"><?php echo $info['reply'];  ?></textarea>
                    </div>
                </div>


                <button class="btnn" style="width: 600px; margin-top: 40px;">
                    <a>Submit</a >
                </button>
            </form>
        </div>
        <div style="width:200px;float:left;">
            <div style="margin-top:70px;">
                <div style="width:150px;height:150px;border:1px solid #fff;margin-left:100px;">
                    <img style="width:100%;height:100%;" src="../<?php echo $info['img_path']; ?>" />
                </div>
            </div>
        </div>

    </div>



</div>
</body>
</html>

