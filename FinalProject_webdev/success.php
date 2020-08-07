<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        <style>
            footer{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
<?php
require 'includes/common.php';
include 'includes/header.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}else{
    $idarray= unserialize($_GET['id']);
    $user_id=$_SESSION['id'];
    foreach($idarray as $item_id){
    $status_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id='$item_id'";
    $query_result= mysqli_query($con, $status_query);}?>
        <br><br><br>
        <div class="container-fluid">
            <center>
            <h2>Thank you for ordering from E-Store. The order shall be delivered to you shortly!</h2> <br>
            <a href="home.php">Click here</a> to purchase any other item.
            </center>
        </div><br><br>
<?php } 
include 'includes/footer.php';?>
    </body>     
</html>