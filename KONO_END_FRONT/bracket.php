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
        <script src="js/bracket.js" defer></script>
        <title>KONO ONLINE</title>
    </head>
    <body>
        <?php require 'top.php'?>
        <!--main body-->
        <div class="index-content">
            <div class="main_context">
                <div class="proheader">
                    <h1>BRACKETS</h1>
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
                            <img src="./image/b1.jpg" alt="Bracket">
                            <p>Bracket 01</p>
                            <p>$15.99</p>
                        </div>
                        <div>
                            <img src="./image/b2.jpg" alt="Bracket">
                            <p>Bracket 02</p>
                            <P>$13.99</P>
                        </div>
                        <div>
                            <img src="./image/b3.jpg" alt="Bracket">
                            <p>Bracket 03</p>
                            <P>$9.99</P>
                        </div>
                        <div>
                            <img src="./image/b4.jpg" alt="Bracket">
                            <p>Bracket 04</p>
                            <p>$12.99</p>
                        </div>
                        <div>
                            <img src="./image/b5.jpg" alt="Bracket">
                            <p>Bracket 05</p>
                            <p>$10.99</p>
                        </div>
                        <div>
                            <img src="./image/b6.jpg" alt="Bracket">
                            <p>Bracket 06</p>
                            <p>$10.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-content"><?php require 'bottom.php';?></div>
    </body>
</html>