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
            color: #00f7ff#00f7ff;
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
        <button class="cn"><a href="joinUs.php">JOIN US</a></button>
        <div class="form">
            <h2>Login Here</h2>
            <form action="doLogin.php" method="post">
            <input type="text" id = "user_id" name="user_id" placeholder="Enter Username Here">
            <input type="password" name = "password" placeholder="Enter Password Here">
            <button class="btnn" type="submit">
                Login
            </button>
            </form>
            <div id="forgot" style=" margin-top:5px;">
<!--                <div style="float:left;width:10px;height:10px;">-->
<!--                    <input type="checkbox" value="" style="width:10px;height:10px;" />Remember Me-->
<!--                </div>-->

                <div style="float:right;">
                    <input type="checkbox" value="" style="width:10px;height:10px;" />&emsp;Remember Me&emsp;
                   <a href="forgot.php" >Forgot password</a>
                </div>

            </div>


            <form action="signup.html", method="post" id="signup" style="clear:both;">
                <p class="link">Don't have an account<br>
                    <a href="./signup.php"> <!--jump to reigister-->
                        Sign up </a>here</a></p>
                <p class="liw">Log in with</p>
            </form>
            <div class="icons">
                <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="https://www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="https://accounts.google.com/signin/v2/challenge/pwd?elo=1&ifkv=ARgdvAuLPsYe-oXsd_yS-QZGHtFePbdBQCAZSGmC8Iq5sU0jQBNrWrApfFPyELI4Vc4Pwps6oR5Txg&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&navigationDirection=forward&TL=ADFpJfMEV3zUDd5LI6dUzOWHvmgFqB6U9nr063ykChFSUkBQM01lszv9_7KqGk0A"><ion-icon name="logo-google"></ion-icon></a>
                <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1670255032&rver=7.1.6819.0&wp=MBI_SSL&wreply=https%3A%2F%2Flw.skype.com%2Flogin%2Foauth%2Fproxy%3Fclient_id%3D360605%26redirect_uri%3Dhttps%253A%252F%252Fsecure.skype.com%252Fportal%252Flogin%253Freturn_url%253Dhttps%25253A%25252F%25252Fsecure.skype.com%25252Fportal%25252Foverview%26response_type%3Dpostgrant%26state%3D2c02b64715c6a3666d9396f2&lc=1033&id=293290&mkt=en-US&psi=skype&lw=1&cobrandid=2befc4b5-19e3-46e8-8347-77317a16a5a5&client_flight=ReservedFlight33%2CReservedFlight67"><ion-icon name="logo-skype"></ion-icon></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
