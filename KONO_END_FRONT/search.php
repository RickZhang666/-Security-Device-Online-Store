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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KONO ONLINE</title>
        <link rel="stylesheet" href="css/search.css" type="text/css">
        <script src="./js/jquery.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php require 'top.php';
        $con=mysqli_connect('localhost','root','','assignment2','3306');
        $field = $_GET['search'];
        if($field!=""){
            $sql = "SELECT * FROM products WHERE description LIKE '%$field%' 
            OR brand LIKE '%$field%'";
            $res=mysqli_query($con,$sql);
        }?>

        <div class="box clearfix">
            <div class="cont">
                <ul>
                    <?php while($ro=mysqli_fetch_array($res)) { ?>
                    <li>
                        <a href="">
                            <div class="img">
                                <img src="<?php echo $ro['img'];?>"/>
                                <p>
                                    <span style="font-weight:700;">$<?php echo $ro['price'];?></span>
                                    <i></i>
                                    <span><?php echo $ro['description'];?></span>
                                    <i></i>
                                    <span><?php echo $ro['brand'];?></span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </body>
</html>