<style>
    .nk-name:hover {
        color:#00f7ff;
        font-size:18px;
    }
    .nk-name {
        color:#fff;
    }

    #nickname {
        color:#fff;
        text-decoration: none;
    }

    #nickname:hover {
        color:#00f7ff;
    }


</style>
<div class="navbar">
    <div class="icon">
        <h2 class="logo">Lost & Found</h2>
    </div>

    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="login.php">ABOUT</a></li>
            <li><a href="lost.php">LOST</a></li>
            <li><a href="found.php">FIND</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>



    <div class="search" style="line-height:90px;height:90px;margin-top:15px">

        <div class="radius dropdown" style="width:200px;height:50px;">
            <?php
            if (isset($_COOKIE['profileimage'])) {
                $img = $_COOKIE['profileimage'];
            } else {
                $img = '';
            }

            if ($img) {
                ?>
                <div id="img1">
                    <img style="float:left;width:50px;height:100%;border-radius: 50px;" class="img-logo" src="../<?php echo $img; ?>" />

                </div>
                <div class="nk-name" style="float:left;height:50px;line-height:50px;">
                    &emsp;
                    <a href="#" id="nickname"><?php echo $_COOKIE['nickname']; ?></a>
                    <div >
                        <div class="dropdown-content">
                            <div>
                                <a  href="./home.php" style="text-decoration: none;">Personal center</a>
                            </div>
                            <div>
                                <a href="./viewMyNotice.php" style="text-decoration: none;">View my notice</a>
                            </div>
                            <div>
                                <a href="./createNotice.php" style="text-decoration: none;">Create notice</a>
                            </div>
                            <div>
                                <a href="./signOut.php" style="text-decoration: none;">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            } else {
                ?>

                <?php
            }

            ?>

        </div>
    </div>
</div>
