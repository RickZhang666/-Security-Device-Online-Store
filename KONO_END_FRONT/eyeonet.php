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
        <script src="js/eyeonet.js" defer ></script>
        <title>KONO ONLINE</title>
    </head>
    <body>
        <?php require 'top.php'?>
        <!--main body-->
        <div class="index-content">
            <div class="main_context">
                <div class="proheader">
                    <h1>EYEONET SURVEILLANCE</h1>
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
                            <img src="./image/e1.jpg" alt="Eyeonet cameras">
                            <p> 4MP HDCVI & analog dual output Camera</p>
                            <p>$79.00</p>
                        </div>
                        <div>
                            <img src="./image/e2.jpg" alt="Eyeonet  cameras">
                            <p>5MP 2.8mm IR 30m Fixed Eyeball Network Camera</p>
                            <P>$169.99</P>
                        </div>
                        <div>
                            <img src="./image/e3.jpg" alt="Eyeonet   cameras">
                            <p>5MP IR 50m IP66 Built-in Mic Eyeball Camera</p>
                            <P>$299.99</P>
                        </div>
                        <div>
                            <img src="./image/e4.jpg" alt="Eyeonet  cameras">
                            <p>5MP 2.8-12mm Motorized IR 50m Camera</p>
                            <p>$229.99</p>
                        </div>
                        <div>
                            <img src="./image/e5.jpg" alt="Eyeonet  cameras">
                            <p>5MP 3.6mm Fixed Full Color Camera</p>
                            <p>$269.99</p>
                        </div>
                        <div>
                            <img src="./image/e6.jpg" alt="Eyeonet  cameras">
                            <p>4MP 2.88mm IR50 Network Camera</p>
                            <p>$99.99</p>
                        </div>
                        <div>
                            <img src="./image/e7.jpg" alt="Eyeonet cameras">
                            <p>4K SMT 8PoE Network Video Record</p>
                            <p>$189.99</p>
                        </div>
                        <div>
                            <img src="./image/e8.jpg" alt="Eyeonet cameras">
                            <p>4K 16CH 16 PoE Network Video Record</p>
                            <p>$179.99</p>
                        </div>
                        <div>
                            <img src="./image/e9.jpg" alt="Eyeonet cameras">
                            <p>4K 8CH P2P Fisheye Network Video Record</p>
                            <p>$89.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-content"><?php require 'bottom.php';?></div>
    </body>
</html>