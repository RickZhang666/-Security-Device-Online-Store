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
        <script src="js/hikvision.js" defer></script>
        <title>KONO ONLINE</title>
    </head>
    <body>
        <?php require 'top.php'?>
        <!--main body-->
        <div class="index-content">
            <div class="main_context">
                <div class="proheader">
                    <h1>HIKIVISION SURVEILLANCE</h1>
                </div>
    
                <!--filter bar-->
                <p class="goodsfilter">Filter By Prices:</p>
                <ul class="content_btn">
                    <li>
                        <button>From low to high</button> 
                    </li>
                    <li>
                        <button>From high to low</button>
                    </li>
                </ul>
    
                <div class="details">
                    <div class="alldetails">
                        <div>
                            <img src="./image/h1.jpg" alt="Hikvision cameras">
                            <p> 4MP Starlight 4-In-1 80m IR Bullet Camera</p>
                            <p>$79.00</p>
                        </div>
                        <div>
                            <img src="./image/h2.jpeg" alt="Hikvision cameras">
                            <p>4MP Starlight 3.6mm Eyeball Network Camera</p>
                            <P>$109.99</P>
                        </div>
                        <div>
                            <img src="./image/h3.jpg" alt="Hikvision cameras">
                            <p>5MP IR Network PTZ Eyeball Camera</p>
                            <P>$99.99</P>
                        </div>
                        <div>
                            <img src="./image/h4.jpeg" alt="Hikvision cameras">
                            <p>8MP IR Vari-focal Turret Network Camera</p>
                            <p>$299.99</p>
                        </div>
                        <div>
                            <img src="./image/h5.jpeg" alt="Hikvision cameras">
                            <p>4MP Outdoor TurboHD PTZ Camera</p>
                            <p>$139.99</p>
                        </div>
                        <div>
                            <img src="./image/h6.jpg" alt="Hikvision cameras">
                            <p>4MP 2.88mm IR Network Camera</p>
                            <p>$119.99</p>
                        </div>
                        <div>
                            <img src="./image/h7.jpg" alt="Hikvision cameras">
                            <p>4MP IR Fixed Turret Network Camema</p>
                            <p>$89.99</p>
                        </div>
                        <div>
                            <img src="./image/h8.jpeg" alt="Hikvision cameras">
                            <p>5MP Smart Fixed-focal Eyeball Network Camera</p>
                            <p>$179.99</p>
                        </div>
                        <div>
                            <img src="./image/h9.jpg" alt="Hikvision cameras">
                            <p>5MP Fisheye Network Camera</p>
                            <p>$109.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-content"><?php require 'bottom.php';?></div>
    </body>
</html>