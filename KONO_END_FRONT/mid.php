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
        <script src="./js/assignment2.js" defer ></script>
    </head>
    <body>
        <!--image rotation-->
        <div class="banner">
            <div class="banner_box">
                <a>
                    <img class="img" src="./image/banner.jpg" alt="AiBase">
                </a>
                <a class="previous"></a>
                <a class="next"></a>
                <ul class="banner_btn">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>

        <!--main-->
        <div class="content">
            <div class="brands">
                <h3>Brands</h3>
                <div class="aibase">
                    <a href="aibase.php">
                        <img class="apic" src="./image/AiBase.png" alt="Aibase logo">
                    </a>
                </div>
                <div class="hikvision">
                    <a href="hikvision.php">
                        <img class="hpic" src="./image/Hikvision.png" alt="Hivision logo">
                    </a>
                </div>
                <div class="eyeonet">
                    <a href="eyeonet.php">
                        <img class="epic" src="./image/eyeonet.png" alt="Eyeonet logo">
                    </a>
                </div>    
            </div>
            <div class="hotdeals">
                <h3>Hot Deals</h3>
                <div class="flyers">
                    <a href="hotdeal1.php">
                        <img class="apic" src="./image/deal1.jpg" alt="Flyers">
                    </a>
                </div>
                <div class="flyers1">
                    <a href="hotdeal2.php">
                        <img class="hpic" src="./image/deal2.jpg" alt="Flyers">
                    </a>
                </div>
                <div class="flyers2">
                    <a href="hotdeal3.php">
                        <img class="epic" src="./image/deal3.jpg" alt="Flyers">
                    </a>
                </div>    
            </div>
            <div class="products">
                <h3>Accessories</h3>
                <div class="connector">
                    <a href="connector.php">
                        <img class="ppic" src="./image/con1.jpg" alt="connector">
                    </a>
                </div>
                <div class="brackets">
                    <a href="bracket.php">
                        <img class="ppic1" src="./image/b1.jpg" alt="brackets">
                    </a>
                </div>
                <div class="cablem">
                    <a href="cable.php">
                        <img class="ppic2" src="./image/m1.jpg" alt="cable management">
                    </a>
                </div> 
            </div>
        </div>
    </body>
</html>