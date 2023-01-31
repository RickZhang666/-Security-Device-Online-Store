<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<!-- example of single page processing form  -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="end-front.css" />
</head>
<body>
<?php

require_once('database.php');
include "header.php" ;
$db = mysqli_connect('localhost','root','','assignment2','3306');

if(!isset($_GET['id'])) {
header("Location:  index.php");
}
$id = $_GET['id'];
// if we decided to delete, execute delete query and redirect to the main page

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sql = "DELETE FROM customer WHERE id ='$id'";
  $result = mysqli_query($db, $sql);
//redirect to the main page
  header("Location: index.php");
} 
else  // to access the employee data
{
  $sql = "SELECT * FROM customer WHERE id= '$id' ";
    
$result_set = mysqli_query($db, $sql);
    
$result = mysqli_fetch_assoc($result_set);
    
}

?>

<?php $page_title = 'DELETE PAGE'; ?>


<div id="content">

  <a class="back-link" href="index.php">&laquo; BACK TO MENU</a>

  <div class="page delete">
    <h1>DELETE PAGE</h1>
    <p class="confirm">ARE YOU SURE YOU WANT TO DELETE THIS CUSTOMER</p>
    <p class="item"><?php echo $result['email']; ?></p>

    <form form action="<?php echo 'delete.php?id=' . $result['id']; ?>"  method="post">
      <div id="operations">
        <input type="submit" name="commit" value="DELETE CUSTOMER" />
      </div>
    </form>
  </div>
  <?php include 'footer.php'; ?>
</div>


