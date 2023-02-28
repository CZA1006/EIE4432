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

        #forgot a{

            color:#fff;
            text-decoration: none;
        }

        #forgot a:hover{
            color:#00f7ff;
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="main">
    <?php
        include_once("./base.php");
    ?>
    <div class="content">
        <h1>LOST <br><span> and </span><br> FOUND</h1>
        <p class="par">
            If you've lost something of your own or <br>
            found something of someone else's,<br>
            please use LOST & FOUND to find your own or owner.
        </p>
        <button class="cn"><a href="#">JOIN US</a></button>
        <div class="form" style="height:340px;">
            <h2>Login Here</h2>
            <form action="doLogin.php" method="post">
            <input type="text" id = "user_id" name="user_id" placeholder="Enter Username Here">
            <input type="password" name = "password" placeholder="Enter Password Here">
            <button class="btnn" type="submit">
                Login
            </button>
            </form>

            <div class="icons">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
