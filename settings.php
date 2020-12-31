<?php
require 'includes/common_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <!--Jquery-->
  <script type="text/javascript" src="Bootstrap/js/jquery-3.5.1.min.js"></script>
  <!--BootStrap JS-->
  <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/all.min.css">

  <link rel="stylesheet" href="style-page.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar bg-dark w-100 navbar-dark navbar-expand-sm">

        <a class="navbar-brand" href="index.html">LifeStyle Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="cart.html"><i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li class="nav-item"><a class="nav-link" href="settings.html" target="_blank"><i
                  class="fas fa-users-cog"></i>
                Settings</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.html"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>
  <div class="container password">
    <div class="card">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Old password" required="true">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="New password" required="true">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder=" Confirm New password" required="true">
          </div>
          <button type="submit" class="btn btn-primary">Change</button>
        </form>
      </div>
    </div>
  </div>
   <?php
  include 'includes/footer.php';
  ?>

</body>

</html>