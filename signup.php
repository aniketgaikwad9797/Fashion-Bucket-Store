<?php
require 'includes/common_connection.php';
if(isset($_SESSION['email']))
{
  header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>

  <!--BootStrap CSS-->
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <!--Jquery-->
  <script type="text/javascript" src="Bootstrap/js/jquery-3.5.1.min.js"></script>
  <!--BootStrap JS-->
  <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/all.min.css">

  <link rel="stylesheet" href="style-page.css">

</head>

<body>
  <?php
  include 'includes/header.php'
  ?>
  <div class="container signup">
    <div class="card ">
      <div class="card-header bg-primary text-light">
        Sign Up
      </div>
      <div class="card-body">
        <form method="post" action="signup_script.php">
          <div class="form-group">
            <input type="text" placeholder="Name" class="form-control" required="yes" name="name">
          </div>
          <div class="form-group">
            <input type="email" placeholder="Email" class="form-control" required="yes" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" required="yes" pattern=".{6,}" name="password">
          </div>
          <div class="form-group">
            <input type="tel" placeholder="Contact" class="form-control" required="yes"
             name="contact" pattern="[0-9]{10}">
          </div>
          <div class="form-group">
            <input type="text" placeholder="City" class="form-control" required="yes" name="city">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Address" class="form-control" required="yes" name="address">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div>
          <?php
          if(isset($_GET['signup_error']))
          echo $_GET['signup_error'];
          else if(isset($_GET['email_error']))
          echo $_GET['email_error'];
          else if(isset($_GET['password_error']))
          echo $_GET['password_error'];
          ?>
          </div>
        </form>
      </div>
    </div>
  </div>
   <?php
  include 'includes/footer.php';
  ?>
</body>

</html>