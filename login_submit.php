<?php
require 'includes/common_connection.php';
?>
<?php
$EMAIL = mysqli_real_escape_string($conn,$_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $EMAIL)) 
{
header('location:login.php email_error=enter correct email');  
}
$PASSWORD = mysqli_real_escape_string($conn,$_POST['password']);
$ENCRYP_PASSWORD=md5($PASSWORD);

if (strlen($PASSWORD) < 6) {
  header('location:login.php?password_error=enter correct pass');
}

$user_id="select * from users where email='$EMAIL' and password='$ENCRYP_PASSWORD' limit 1";

$user_id_query=mysqli_query($conn,$user_id) or die(mysqli_error($conn));

$user_exits=mysqli_num_rows($user_id_query);

if($user_exits==0)
{
  //echo "Invalid Credentials!!";
  header('location:login.php?error=Invalid Credentials!! Try Again');
}
else
{
  $row=mysqli_fetch_array($user_id_query);
    $_SESSION['email']=$EMAIL;
    $_SESSION['users_id']=mysqli_insert_id($conn);
  header('location:products.php');
}

//$email = mysqli_real_escape_string($conn, $email);
//$password = mysqli_real_escape_string($conn, $password);


?>