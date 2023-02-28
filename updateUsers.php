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
        .btnn a {
            color:#fff;
        }

        .btnn a:hover {
            color:#00f7ff;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    include_once("./base.php");
    ?>
    <div class="form" style="width: 900px; height: 450px; top: 100px; left: 400px; ">
        <div style="width: 600px;float:left;">
            <h2 style="width: 578px;">Update Infos</h2>
            <form action="./doUpdateUsers.php" method="post" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr;">
                <input name="id" value="<?php echo isset($_COOKIE['id']) ? $_COOKIE['id'] : ''?>" style="display: none;" />
                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="user_id">User Id</label>
                    <input readonly type="text" value="<?php echo isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : '' ?>" class="link" style="color:#fff; padding-top: 5px;padding-left:10px;" id="user_id" name="user_id"/>
                </div>
                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="nickname">Nick Name</label>
                    <input  type="text" class="link" value="<?php echo isset($_COOKIE['nickname']) ? $_COOKIE['nickname'] : '' ?>" style="color:#fff; padding-top: 5px;" id="nickname" name="nickname"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="email">Email</label>
                    <input  type="email" class="link" style="color:#fff; padding-top: 5px;" id="email" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"/>
                </div>

                <div class="link" style="color:#fff; padding-top: 5px;">
                    <label for="profileimage">Profile Image</label>
                    <input type="file" class="link" style="color:#fff; padding-top: 5px;" id="profileimage" name="profileimage"/>
                </div>

                <button class="btnn" style="width: 600px; margin-top: 40px;">
                    Submit
                </button>
            </form>
        </div>
        <div style="width:200px;float:left;">
            <div style="margin-top:70px;">
                <?php
                if (isset($_COOKIE['profileimage'])) {
                    $img = $_COOKIE['profileimage'];
                } else {
                    $img = '';
                }

                if ($img) {
                    ?>
                    <div style="width:150px;height:150px;border:1px solid #fff;margin-left:100px;">
                        <img style="width:100%;height:100%;" src="../<?php echo $img; ?>" />
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>

    </div>
</div>
</body>
</html>
