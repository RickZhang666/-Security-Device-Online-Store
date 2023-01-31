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
        <link rel="stylesheet" type="text/css" href="./css/hotdeal.css">
        <link rel="stylesheet" type="text/css" href="./css/assignment2.css">
        <script src="js/hotdeal1.js" defer ></script>
        <title>KONO ONLINE</title>
    </head>

    <body>
        <?php require 'top.php'?>

        <div class="index-content" style="min-height: 650px;">
            <div class="product_intro">
                <div class="preview_wrap">
                    <div class="main_img">
                        <img src="./image/combo4.jpg" alt="camera" class="img">
                    </div>
                    <div class="spec_list">
                        <a class="prev"></a>
                        <a class="nex"></a>
                        <div class="spec_items">
                            <ul>
                                <li class="img_hover">
                                    <img src="./image/combo4.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd25.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd24.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd23.jpg" alt="camera">
                                </li>
                            </ul>
                        </div>
                   </div>
                </div>
    
                <div class="itemInfo_wrap">
                    <h1>5MP 4CH KIT</h1>
                    <p>
                    5MP 4CH AI Perimeter 4-In-1 HD Analog Kit includes:
                    - 1 X XV51A04H-4KL-I3-1T (4CH 4K AI XVR, 1TB HDD pre-installed)
                    - 4 X IC9115TB-28-S2 (5MP 16:9 turret)
                    </p>
                    <h2>Only $479.99</h2>
                </div>
            </div>
        </div>
        <div class="index-content"><?php require 'bottom.php';?></div>
    </body>
</html>