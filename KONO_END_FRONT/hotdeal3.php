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
                        <img src="./image/hd31.jpg" alt="camera" class="img">
                    </div>
                    <div class="spec_list">
                        <a class="prev"></a>
                        <a class="nex"></a>
                        <div class="spec_items">
                            <ul>
                                <li class="img_hover">
                                    <img src="./image/hd31.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd32.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd33.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd34.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd35.jpg" alt="camera">
                                </li>
                                <li>
                                    <img src="./image/hd36.jpg" alt="camera">
                                </li>
                            </ul>
                        </div>
                   </div>
                </div>
    
                <div class="itemInfo_wrap">
                    <h1>HOT DEALS</h1>
                    <p>
                        Security Camera Outdoor 1080P 2.4GHz WiFi Wireless Home Security PTZ Camera, 
                        360° View Surveillance IP Camera with Night Vision, IP66 Waterproof, 
                        Two-Way Audio, Auto Tracking
                    </p>
                    <h2>Only $99.99</h2>
                </div>
            </div>
            <div class="index-content">
                <?php require 'bottom.php';?>
            </div>
        </div>
    </body>
</html>