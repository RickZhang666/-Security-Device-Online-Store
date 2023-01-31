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
        <link rel="stylesheet" href="./css/index.css">
        <script src="./js/aibase.js" defer ></script>
        <title>KONO ONLINE</title>
    </head>
    <body>
        <?php require 'top.php'?>
        <!--main body-->
        <div class="index-content">
            <div class="main_context">
                <div class="proheader">
                    <h1>AIBASE SURVEILLANCE</h1>
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
                            <img src="./image/ai1.jpg" alt="Aibase cameras">
                            <p class="title"> 4MP Starlight 4-In-1 80m IR Bullet Camera</p>
                            <p class="prices">$49.00</p>
                        </div>
                        <div>
                            <img src="./image/ai2.jpeg" alt="Aibase cameras">
                            <p>4MP IR Fixed-focal Eyeball Network Camera Black</p>
                            <P class="prices">$129.99</P>
                        </div>
                        <div>
                            <img src="./image/ai3.jpeg" alt="Aibase cameras">
                            <p>4MP Smart Dual Illumination Fixed-focal Eyeball Camera</p>
                            <P class="prices">$219.99</P>
                        </div>
                        <div>
                            <img src="./image/ai4.jpeg" alt="Aibase cameras">
                            <p>5MP IR Vari-focal Eyeball Network Camera</p>
                            <p class="prices">$259.99</p>
                        </div>
                        <div>
                            <img src="./image/ai5.jpeg" alt="Aibase cameras">
                            <p>5MP IR Vari-focal Dome Network Camera</p>
                            <p class="prices">$129.99</p>
                        </div>
                        <div>
                            <img src="./image/ai6.jpeg" alt="Aibase cameras">
                            <p>8MP 25x Starlight IR Network PTZ Camera</p>
                            <p class="prices">$169.99</p>
                        </div>
                        <div>
                            <img src="./image/ai7.jpeg" alt="Aibase cameras">
                            <p>4MP 24x Startlight IR PTZ Camema</p>
                            <p class="prices">$319.99</p>
                        </div>
                        <div>
                            <img src="./image/ai8.jpeg" alt="Aibase cameras">
                            <p>5MP Smart Fixed-focal Eyeball Network Camera</p>
                            <p class="prices">$179.99</p>
                        </div>
                        <div>
                            <img src="./image/ai9.jpeg" alt="Aibase cameras">
                            <p>4MP THERMAL NETWORK MINI HYBRID BULLET CAMERA</p>
                            <p class="prices">$139.99</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="index-content"><?php require 'bottom.php';?></div>
    </body>
</html>