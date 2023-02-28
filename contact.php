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
        <h1>CONTACT <br><span> INFOMATION </span></h1>
        <p class="par">
            Please contact us in the following ways:<br>
            Telephone: 2333 0600 <br>
            Email: ar.ug@polyu.edu.hk<br>
            Fax: 2334 6671<br>
            Address: 11 Yuk Choi Road, Hung Hom, Kowloon, Hong Kong
    </div>
</div>
</div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
