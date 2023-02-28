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

    <div class="form" style="width: 600px; height: 760px; top: 100px; left: 600px; ">
        <h2 style="width: 578px;">Registration</h2>
        <form action="doSignUp.php" method="post" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr;">
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="user_id">User Id</label>
                <input type="text" class="link" style="color:#fff; padding-top: 5px;" id="user_id" name="user_id"/>
            </div>
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="nickname">Nick Name</label>
                <input type="text" class="link" style="color:#fff; padding-top: 5px;" id="nickname" name="nickname"/>
            </div>
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="profileimage">Profile Image</label>
                <input type="file" class="link" style="color:#fff; padding-top: 5px;" id="profileimage" name="profileimage"/>
            </div>
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="gender">Gender</label>
                <div style="display:grid; grid-template-columns: 70px 70px 70px; align-items: center; margin:0">
                    <label for="male" style="display: block; width: 40px; height: 20px">
                        <input type="radio" name="gender" value="Male" id="male" style="display: block; width: 40px; height: 16px; margin: 0;"/>Male
                    </label>
                    <label for="female" style="display: block; width: 40px; height: 20px">
                        <input type="radio" name="gender" value="Female" id="female" style="display: block; width: 40px; height: 16px; margin: 0;"/>Female
                    </label>
                    <label for="other" style="display: block; width: 40px; height: 20px">
                        <input type="radio" name="gender" value="Other" id="other" style="display: block; width: 40px; height: 16px; margin: 0;"/>Other
                    </label>
                </div>
            </div>
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="birthday">Birthday</label>
                <input type="date" class="link" style="color:#fff; padding-top: 5px;" id="birthday" name="birthday"/>
            </div>
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="email">Email</label>
                <input type="email" class="link" style="color:#fff; padding-top: 5px;" id="email" name="email"/>
            </div>
            <div class="link" style="color:#fff;padding-top: 5px;">
                <label for="password">Password</label>
                <input type="password" class="link" style="color:#fff; padding-top: 5px;" id="password" name="password"/>
            </div>
            <div class="link" style="color:#fff;padding-top: 5px;">
                <label for="phone">Phone Number</label>
                <input type="tel" class="link" style="color:#fff;padding-top: 5px;" id="phone" name="phone"/>
            </div>
            <button class="btnn" style="width: 600px; margin-top: 40px;">
                <a>Submit</a >
            </button>
        </form>
    </div>
</div>
</body>
</html>
