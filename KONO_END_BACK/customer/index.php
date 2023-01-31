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
  <title>PHP_DB</title>
</head>

<body>
  <?php include("header.php"); 
  require_once('database.php');
  $db = mysqli_connect('localhost','root','','assignment2','3306');
  $sql = "SELECT * FROM customer ORDER BY id "; 
  $result_set = mysqli_query($db, $sql);
  ?>

  <div id="content">
    <div class="subjects listing">
      <h1>CUSTOMER</h1>
      <div class="actions">
        <a class="action" href="new.php">CREAT NEW CUSTOMER</a>
      </div>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>OTHER</th>
        <th colspan="3">EDIT</th>
      </tr>
      <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['email']; ?></td>
          <td><?php echo $results['password']; ?></td>
          <td><?php echo $results['other']; ?></td>
          <td><a class="action" href="<?php echo "show.php?id=" . $results['id']; ?>">VIEW</a></td>
          <td><a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">EDIT</a></td>
          <td><a class="action" href="<?php echo "delete.php?id=" . $results['id']; ?>">DELETE</a></td>
        </tr>
      <?php } ?>
    </table>

    <br>
    <br>
    <br>
    <br>
    <?php include("footer.php"); ?>
  </div>
</body>

</html>