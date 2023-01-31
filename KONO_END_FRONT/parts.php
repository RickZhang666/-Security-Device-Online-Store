<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mia Xue, Rick Zhang">
        <meta name="keywords" content="security camares, surveillance systems">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" type="text/css" href="./css/assignment2.css">
        <link rel="stylesheet" type="text/css" href="./css/content.css">
        <!-- <script src="js/hikvision.js" defer></script> -->
        <title>KONO ONLINE</title>
    </head>
    <body>
        <?php require 'top.php'?>
        <!--main body-->
        <div class="index-content">
            <div class="main_context">
                <div class="proheader">
                    <h1>PARTS SURVEILLANCE</h1>
                </div>
                <!--filter bar-->
                <!-- <p class="goodsfilter">Filter By Prices:</p>
                <ul class="content_btn">
                    <li>
                        <button>From low to high</button> 
                    </li>
                    <li>
                        <button>From high to low</button>
                    </li>
                </ul> -->
                <?php $con=mysqli_connect('localhost','root','','assignment2','3306');
                $sql = "SELECT * FROM products WHERE description LIKE '%cable%' 
                OR description LIKE '%bracket%' OR description LIKE '%connector%'";
                $res=mysqli_query($con,$sql);
                ?>
                <div class="details">
                    <div class="alldetails">
                        <?php while($ro=mysqli_fetch_array($res)) { ?>
                            <div>
                                <img src="<?php echo $ro['img'];?>"/>
                                <p>$<?php echo $ro['price'];?></p>
                                <?php echo $ro['description'];?></p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-content">
            <?php require 'bottom.php';?>
        </div>
    </body>
</html>