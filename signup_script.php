<?php
require 'includes/common_connection.php';
if(isset($_SESSION['email']))
{
  header('location:products.php');
}
?>
<?php

$EMAIL_ID= mysqli_real_escape_string($conn,$_POST['email']);
$PASSWORD= mysqli_real_escape_string($conn,$_POST['password']);
$ENCRYP_PASSWORD=md5($PASSWORD);
$NAME=mysqli_real_escape_string($conn,$_POST['name']);
$CONTACT=mysqli_real_escape_string($conn,$_POST['contact']);
$_CITY=mysqli_real_escape_string($conn,$_POST['city']);
$_ADDRESS=mysqli_real_escape_string($conn,$_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

//check whether user already exists
$user_registration_check="select * from users where email='$EMAIL_ID' limit 1";
$user_check_query=mysqli_query($conn,$user_registration_check) or die(mysqli_error($conn));
$user_already_exits=mysqli_num_rows($user_check_query);

if($user_already_exits!=0)
{
   header('location:signup.php?signup_error=Email id already exists!!');
}
else if (!preg_match($regex_email, $EMAIL_ID)) 
{
header('location:signup.php?email_error=Incorrect email id!');  
}
else if (strlen($PASSWORD) < 6) {
  header('location:signup.php?password_error=Incorrect password!');
} 
else
{
  $USER_REGISTRARTION="insert into users(name,email,password,contact,city,address) values('$NAME','$EMAIL_ID','$ENCRYP_PASSWORD','$CONTACT','$_CITY','$_ADDRESS')";
  $USER_REGISTRARTION_QUERY=mysqli_query($conn,$USER_REGISTRARTION) or die(mysqli_error($conn));
 // $_SESSION['id']=mysqli_insert_id($conn);
  //$_SESSION['email']=$EMAIL_ID;
  header('location:login.php?submit_success=Sucessfully Signed In!Login Now');
}
?>