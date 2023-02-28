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
        require_once("./base.php");
        require_once("./config.php");
        $sql = "SELECT * FROM notices";

        $age30 = 0;
        $age50 = 0;
        $age70 = 0;
        $result = mysqli_query($conn,$sql);

        while($info = mysqli_fetch_array($result)) {
            $id = $info['user_id'];
            $userSql =  "SELECT * FROM users WHERE id = '$id'";

            $userRes = mysqli_query($conn,$userSql);

            if(mysqli_num_rows($userRes)){
                $userInfo = mysqli_fetch_array($userRes);

                $age = date('Y') - date('Y',strtotime($userInfo['birthday']));

                if ($age >= 10 && $age < 30) {
                    $age30++;
                }

                if ($age >= 30 && $age < 50) {
                    $age50++;
                }

                if ($age >= 50 && $age < 70) {
                    $age70++;
                }
            }
        }

        ?>


    <div style="display:none;">
        <input id="age30" value="<?php echo $age30; ?>" />
        <input id="age50" value="<?php echo $age50; ?>" />
        <input id="age70" value="<?php echo $age70; ?>" />
    </div>


    <div>


    <div class="form" style="width: 900px; height: 530px; top: 100px; left: 400px; color:#fff;">
        <div >
            <center>
                show the statistics of the number of notices in different age ranges
            </center>
            </div>

        <div id="pie" style="color:#fff;width:400px;height:100%;margin:0 auto;"></div>
    </div>



</div>
</body>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/echarts.min.js"></script>
<script>
    let age30 = $('#age30').val();
    let age50 = $('#age50').val();
    let age70 = $('#age70').val();
    option = {
        title: {
            // text: 'show the statistics of the number of notices in different age ranges',
            subtext: 'Notices Data',
            left: 'center',
            color:'#fff'
        },
        tooltip: {
            trigger: 'item',
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            textStyle: {
                color:'#fff'
            }
        },
        series: [
            {
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: [
                    { value: 14, name: '30-50' },
                    { value: 7, name: '50-70' },
                    { value: 15, name: '10-30' },
                    { value: 1, name: 'other' },

                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };

    let mychart = echarts.init(document.getElementById('pie'));
    mychart.setOption(option);
</script>
</html>

