<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:index.php');
} else {
session_unset();
session_destroy();
echo 'You have successfully logged out';
header("refresh:3;url=index.php");
}
?>