<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<?php
session_start();
$con=mysqli_connect('localhost','root','','assignment2','3306');
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $res = true;
    if ($con) {
        $log = "select * from customer where email='$email' and password='$pwd'";
        $res = mysqli_query($con, $log);
        if ($res->num_rows > 0) {
            echo 1; //Login Successfully;
        $_SESSION['login'] = $email;
        } else {
            echo 2; //Email or Passord Incorrect;
        }
    }
?>
