<?php
require 'includes/common_connection.php';
?>
<?php
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
  <title>Login</title>
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
  include 'includes/header.php';
  ?>
  <div class="container login">
    <div class="signup_message">
      <?php
       if(isset($_GET['submit_success']))
      {echo $_GET['submit_success'];}
      ?>
    </div>
    <div class="card ">
      <div class="card-header bg-primary">Login</div>
      <div class="card-body">
        <div class="alert alert alert-info"><strong>Login</strong> to make a purchase </div>
        <form method="post" action="login_submit.php"> 
          <div class="form-group">
            <input type="email" placeholder="Email" required="yes" class="form-control"  name="email" >
            <?php
             if(isset($_GET['email_error']))
             {echo $_GET['email_error'];}
            ?>
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" required="yes" class="form-control" name="password" pattern=".{6,}">
            <?php 
            if(isset($_GET['password_error']))
            {
              echo $_GET['password_error'];
            }
            ?>
          </div>
          <div class="form-group">
            <button type="Login" class="btn btn-primary">Login</button>
          </div>
      </div>
      </form>
    </div>
    <div>
    <div class="error">
      <?php
      if(isset($_GET['error']))
      {echo '<div style="color:red ;font-size:18px;text-align:center;">'.$_GET['error'].'</div>';}
      //echo $_GET['error'];
      ?>
    </div>
    </div>
    <div class="card-footer">Don't have an account? <a href="signup.php" class="register">Register</a></div>
  </div>
  </div>
   <?php
  include 'includes/footer.php';
  ?>
</body>

</html>