<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="end-front.css" />
</head>
<body>
  
<?php include 'header.php'; ?>

<div id="content">

  <div class="back-link"><a href="<?php echo 'index.php'; ?>"> BACK TO LIST</a></div>
  <div class="new_customer">
    <h1>CREATE NEW CUSTOMER</h1>

    <form action='create.php' method="POST">
    
      <dl>
        <dt>CUSTOMER EMAIL</dt>
        <dd><input type="text" name="email"  placeholder="EMAIL ADDRESS"/></dd>
          
      </dl>
      <dl>
        <dt>CUSTOMER PASSWORD</dt>
        <dd><input type="text" name="password" placeholder="PASSWORD"/></dd>
        </dd>
      </dl>
      <dl>
        <dt>OTHER</dt>
        <dd><input type="text" name="other" placeholder="OTHER INFO"/></dd>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Customer" />
      </div>
    </form>


  </div>

</div>

<?php include 'footer.php'; ?>
