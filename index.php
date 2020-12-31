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
  <title>Lifestyle Store</title>

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
  <div class="content">
    <div class="bk-image">
      <div class="text-content">
        <div class="bk-content">
          <h1>We sell lifestyle</h1>
          <p>Flat 40% off on premium brands</p>
          <a href="products.php" class="btn btn-danger btn-lg">Shop Now!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container products">
    <div class="row">
      <div class=" col-md-4 col-sm-12 col-12">
        <div class="card text-center">
          <img class="card-img-top img-fluid" src="Images/camera.jpg" alt="Camera">
          <div class="card-body">
            <h4 class="card-title">Camera</h4>
            <p class="card-text">Best cameras in the world</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-12 ">
        <div class="card text-center">
          <img class="card-img-top img-fluid" src="Images/shirt.jpg" alt="Camera">
          <div class="card-body">
            <h4 class="card-title">Shirts</h4>
            <p class="card-text">Quality shirts with best fabric</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-12 ">
        <div class="card text-center">
          <img class="card-img-top img-fluid" src="Images/watch.jpg" alt="Camera">
          <div class="card-body">
            <h4 class="card-title">Watches</h4>
            <p class="card-text">Best watches around the globe</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'includes/footer.php';
  ?>

</body>

</html>