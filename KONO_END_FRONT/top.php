<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<?php require 'config.php';
session_start();
if(isset($_GET['delete'])){
    unset($_SESSION['login']);
    header("index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KONO ONLINE</title>
        <link rel="stylesheet" href="css/top.css" type="text/css">
        <script src="./js/jquery.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="header_outter">
            <div class="header_inner">
                <a class="logo" href="index.php"><img src="image/logo.jpg" alt=""></a>

                <nav>
                    <ul>
                        <li><a href="index.php">HOME<i class="nav_icon"></i></a></li>
                        <li>BRANDS<i class="nav_icon"></i>
                            <div class="nav_sub">
                                <a href="hikvision.php"><img src="image/page/hik.png" class="sub_img" alt="">HIKVISION</a>
                                <a href="eyeonet.php"><img src="image/page/eye.png" class="sub_img" alt="">EYEONET</a>
                                <a href="aibase.php"><img src="image/page/ai.png" class="sub_img" alt="">AIBASE</a>
                            </div>
                        </li>
                        <li>DEALS<i class="nav_icon"></i>
                            <div class="nav_sub">
                                <a href="combo4.php"><img src="image/page/camera5.png" class="sub_img" alt="">4CAM COMBO</a>
                                <a href="combo6.php"><img src="image/page/camera6.png" class="sub_img" alt="">6CAM COMBO</a>
                            </div>
                        </li>
                        <li>PRODUCTS<i class="nav_icon"></i>
                            <div class="nav_sub">
                                <a href="camera.php"><img src="image/page/camera1.png" class="sub_img" alt="">CAMERA</a>
                                <a href="nvr.php"><img src="image/page/camera2.png" class="sub_img" alt="">NVR</a>
                                <a href="parts.php"><img src="image/page/camera4.png" class="sub_img" alt="">PARTS</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="search">
                    <form action="search.php" name="form_search" method="get">
                        <input type="input" name="search" id="search" placeholder="Search Brands or Products">
                        <img src="image/button.png" class="search_icon" alt="" onclick="document.form_search.submit()">
                    </form>
                </div>
                <?php
                // $con = "SELECT * FROM users WHERE email='".$_SESSION['login']."'";
                // $que = mysqli_query($con);
                // $userinfo = mysqli_fetch_array($que);
                if(isset($_SESSION['login'])){ ?>
                <div class="header_user">
                    <span class="user_info">
                        <a href="index.php?delete=1">LOGOUT</a>
                        <i></i>
                        <P>Welcome <?php echo $_SESSION['login'] ?></P>
                    </span>
                </div>
                <?php }else{ ?>
                    <div class="header_user">
                        <span class="user_info">
                            <a href="register.php">REGISTER</a>
                            <i></i>
                            <a href="login.php">LOGIN</a>
                        </span>
                    </div>
                <?php } ?>

            </div>
        </div>
        

        <script type="text/javascript">
            $(function(){
                var header_position=10;
                $(document).scroll(function(){
                    $(window).scrollTop()>=header_position?$('#header_outter').addClass('fixed'):
                    $('#header_outter').removeClass('fixed');
                })
            })
        </script>
    </body>

</html>