<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
    }else{
        $oldpassword= mysqli_real_escape_string($con,md5($_POST['old-password']));
        $newpassword=mysqli_real_escape_string($con,md5($_POST['new-password']));
        $renewpassword=mysqli_real_escape_string($con,md5($_POST['re-new-password']));
        if($newpassword!=$renewpassword){
            echo 'Passwords do not match. Please check again..';
            header("refresh:3;url=settings.php");
        }else{
            $fetch_query="SELECT * FROM users WHERE id={$_SESSION['id']}";
            $fetch_query_result= mysqli_query($con, $fetch_query) or die(mysqli_error($con));
            $user_data= mysqli_fetch_array($fetch_query_result);
            if($oldpassword!=$user_data['password']){
                echo 'You have entered wrong password. Please try again!';
                header("refresh:3;url=settings.php");
            }else{
                $update_query="UPDATE users SET password='$newpassword' WHERE users.id='{$_SESSION['id']}';";
                $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
                echo 'You have successfully changed your password!';
                header("refresh:3;url=index.php");
            }
        }
    }