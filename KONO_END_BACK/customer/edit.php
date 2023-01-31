<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<?php
require_once('database.php');
$db = mysqli_connect('localhost','root','','assignment2','3306');

if(!isset($_GET['id'])) { 
  header("Location:  index.php");
}
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id']; 
  $email= $_POST['email'] ;
  $password= $_POST['password'] ;
  $sql="UPDATE customer set email= '$email' , password= '$password' where id = '$id' ";
  $result = mysqli_query($db, $sql);
    header("Location: show.php?id=  $id");
  }
  else {
  $sql = "SELECT * FROM customer WHERE id= '$id' ";
  $result_set = mysqli_query($db, $sql);
  $result = mysqli_fetch_assoc($result_set);
  }

?>

<?php include 'header.php' ?>;

<div id="content">

  <a class="back-link" href="index.php"> BACK TO MENU</a>
  <div class="page edit">
    <h1>EDIT CUSTOMER</h1>

    <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>"  method="post">
      <dl>
        <dt>EMAIL</dt>
        <dd><input type="text" name="email" value="<?php echo $result['email']; ?>" /></dd>
      </dl>
      <dl>
        <dt>PASSWORD</dt>
        <dd><input type="text" name="password" value="<?php echo $result['password']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>OTHER</dt>     
        <dd><input type="text" name="other" value="<?php echo $result['other']; ?>" /></dd>
        </dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="EDIT CUSTOMER" />
      </div>
    </form>

  </div>

</div>

<?php include 'footer.php'; ?>
