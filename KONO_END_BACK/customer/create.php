<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<?php
require_once('database.php');
include "headerEm.php";
$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $email = $_POST['email']; 
  $password = $_POST['password'];
  $other = $_POST['other'];
  $ins = "INSERT INTO customer (email, password, other) VALUES ('$email','$password','$other')";
  $result = mysqli_query($db, $ins);
  $id = mysqli_insert_id($db); 
  header("Location: show.php?id=  $id");
} else {
  header("Location:  new.php");
}
