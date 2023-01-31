<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="end-front.css" />
</head>

<body>

  <?php
  //conect to the datbase
  
  require_once('database.php');
  include "header.php";
  $db = mysqli_connect('localhost','root','','assignment2','3306');
  //access URL parameter

  $id = $_GET['id'];

  //prepare your query
  $sql = "SELECT * FROM customer WHERE id= '$id' ";

  $result_set = mysqli_query($db, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the employee data -->
  <div id="content">

    <a class="back-link" href="index.php"> Back to List</a>

    <div class="page show">

      <h1> <?php echo $result['email']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>CUSTOMER ID</dt>
          <dd><?php echo $result['id']; ?></dd>
        </dl>
        <dl>
          <dt>CUSTOMER EMAIL</dt>
          <dd><?php echo $result['email']; ?></dd>
        </dl>
        <dl>
          <dt>CUSTOMER PASSWORD</dt>
          <dd><?php echo $result['password']; ?></dd>
        </dl>
        <dl>
          <dt>OTHER</dt>
          <dd><?php echo $result['other']; ?></dd>
        </dl>
      </div>
     </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>