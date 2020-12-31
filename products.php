<?php
require 'includes/common_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
<!--Jquery-->
<script type="text/javascript" src="Bootstrap/js/jquery-3.5.1.min.js"></script>
<!--BootStrap JS-->
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="style-page.css">

<body>
  <?php
  include 'includes/header.php';
  ?>
  <div class="container products-padding">
    <div class="jumbotron text-center">
      <h1>Welcome to our Fashion Bucket store!</h1>
      <p class="text-secondary">We have the best cameras,shirts and watches for you. No need to hunt around,we have all
        in one place</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="images/5.jpg" alt="Cannn-EOS">
          <div class="card-body text-center">
            <h3 class="card-title">Cannon EOS</h3>
            <p class="card-text text-secondary">Price Rs.36000.00</p>
            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="Images/2.jpg" alt="Sony DSLR">
          <div class="card-body text-center">
            <h3 class="card-title">Sony DSLR</h3>
            <p class="card-text text-secondary">Price Rs. 40000.00</p>
            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="Images/3.jpg" alt="Sony DSLR">
          <div class="card-body text-center">
            <h3 class="card-title">Sony DSLR</h3>
            <p class="card-text text-secondary">Price Rs. 50000.00</p>
            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="Images/4.jpg" alt="Olympus DSLR">
          <div class="card-body text-center">
            <h3 class="card-title">Olympus DSLR</h3>
            <p class="card-text text-secondary">Price Rs. 50000.00</p>
            <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="watches">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex">
          <div class="card  flex-fill">
            <img class="card-img-top" src="images/9.jpg" alt="Titan Model #301">
            <div class="card-body text-center">
              <h4 class="card-title">Titan Model #301</h4>
              <p class="card-text text-secondary">Price Rs. 13000.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6  d-flex">
          <div class="card">
            <img class="card-img-top" src="images/10.jpg" alt="Titan Model #201">
            <div class="card-body text-center flex-fill">
              <h4 class="card-title">Titan Model #201</h4>
              <p class="card-text text-secondary">Price Rs. 30000.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex">
          <div class="card flex-fill">
            <img class="card-img-top" src="images/11.jpg" alt="HMT Milan">
            <div class="card-body text-center">
              <h4 class="card-title">HMT Milan</h4>
              <p class="card-text text-secondary">Price Rs. 80000.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex">
          <div class="card flex-fill">
            <img class="card-img-top" src="images/12.jpg" alt="Faber Luba #111">
            <div class="card-body text-center">
              <h4 class="card-title">Faber Luba #111</h4>
              <p class="card-text text-secondary">Price Rs. 18000.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="shirts">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/shirt.jpg" alt="H&W">
            <div class="card-body text-center">
              <h3 class="card-title">H&W</h3>
              <p class="card-text text-secondary">Price Rs. 800.00</p><br>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/6.jpg" alt="Louis Phil">
            <div class="card-body">
              <h3 class="card-title">Louis Philippe</h3>
              <p class="card-text text-secondary">Price Rs. 1000.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
          
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <img class="card-img-top" src="Images/13.jpg" alt="John Zok">
            <div class="card-body text-center">
              <h3 class="card-title">John Zok</h3>
              <p class="card-text text-secondary">Price Rs. 1500.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <img class="card-img-top" src="Images/14.jpg" alt="Jhalsani">
            <div class="card-body text-center">
              <h3 class="card-title">Jhalsani</h3>
              <p class="card-text text-secondary">Price Rs. 1300.00</p>
              <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
            </div>
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