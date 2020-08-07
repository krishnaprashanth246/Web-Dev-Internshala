<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$contact = $_POST['contact'];
$city=$_POST['city'];
$address= mysqli_real_escape_string($con,$_POST['address']);
$check_query="SELECT email FROM users WHERE email='$email'";
$check= mysqli_query($con, $check_query) or die(mysqli_error($con));
if(mysqli_num_rows($check)==0){
$user_registration_query = "INSERT into users(email, name, password, contact, city, address) VALUES ('$email', '$name', '$password', '$contact','$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted.<br>Redirecting to home page....";
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
header("refresh:3;url=home.php");
}else{
    echo 'Email id already exists';
    header("refresh:3;url=signup.php");
}
?>