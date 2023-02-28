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

    <div class="form" style="width: 600px; height: 680px; top: 100px; left: 600px; ">
        <h2 style="width: 578px;">Create Notices </h2>
        <form action="./doCreateNotice.php" method="post" enctype="multipart/form-data" style="display: grid; grid-template-columns: 1fr;">
            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="type">Type</label>
                <div style="display:grid; grid-template-columns: 70px 70px 70px; align-items: center; margin:0">
                    <label for="type" style="display: block; width: 40px; height: 20px">
                        <input required type="radio" name="type" value="FOUND" id="male" style="display: block; width: 40px; height: 16px; margin: 0;"/>FOUND
                    </label>
                    <label for="female" style="display: block; width: 40px; height: 20px;margin-left:20px;">
                        <input required type="radio" name="type" value="LOST" id="female" style="display: block; width: 40px; height: 16px; margin: 0;"/>LOST
                    </label>
                </div>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="title">Title</label>
                <input required type="text" class="link" style="color:#fff; padding-top: 5px;" id="title" name="title"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="describe">Describe</label>
                <input required type="text" class="link" style="color:#fff; padding-top: 5px;" id="describe" name="describe"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="date_time">Date</label>
                <input required type="date" class="link" style="color:#fff; padding-top: 5px;" id="date_time" name="date_time"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="nickname">Address</label>
                <input required type="text" class="link" style="color:#fff; padding-top: 5px;" id="address" name="address"/>
            </div>

            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="contacts">Contacts</label>
                <input required type="text" class="link" style="color:#fff; padding-top: 5px;" id="contacts" name="contacts"/>
            </div>



            <div class="link" style="color:#fff; padding-top: 5px;">
                <label for="img_path">Image</label>
                <input required type="file" class="link" style="color:#fff; padding-top: 5px;" id="profileimage" name="profileimage"/>
            </div>

            <button class="btnn" style="width: 600px; margin-top: 40px;">
                <a>Submit</a >
            </button>
        </form>
    </div>
</div>
</body>
</html>

