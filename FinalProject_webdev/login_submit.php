<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,md5($_POST['password']));
$check_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$check= mysqli_query($con, $check_query) or die(mysqli_error($con));
if(mysqli_num_rows($check)==0){
    echo 'Invalid email/password!';
    header( "refresh:5;url=index.php" );
}else{
    $array= mysqli_fetch_array($check);
    echo "Welcome ".$array['name']."......<br>";
    $_SESSION['email']=$email;
    $_SESSION['id']=$array['id'];
    echo "Redirecting to Home page.....";
    header('refresh:4;url=home.php');
} ?>