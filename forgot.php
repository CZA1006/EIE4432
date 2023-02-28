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
    </style>
</head>
<body>
<div class="main">
    <?php
        include_once("./base.php");
    ?>

    <div class="form" style="width: 600px; height: 360px; top: 100px; left: 600px; ">
        <h2 style="width: 578px;">Forgot Password </h2>
        <form action="./doForgot.php" method="post" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr;">
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="user_id">User Id</label>
                <input type="text" required class="link" style="color:#fff; padding-top: 5px;" id="user_id" name="user_id"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="email">email</label>
                <input type="email" required class="link" style="color:#fff; padding-top: 5px;" id="email" name="email"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="password">password</label>
                <input type="password" required class="link" style="color:#fff; padding-top: 5px;" id="password" name="password"/>
            </div>

            <button class="btnn" style="width: 600px; margin-top: 40px;">
                <a>Submit</a >
            </button>
        </form>
    </div>
</div>
</body>
</html>
