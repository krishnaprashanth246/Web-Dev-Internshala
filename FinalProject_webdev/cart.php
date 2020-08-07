<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
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
if(!isset($_SESSION['email'])){
    echo 'You must login first.';
    header('refresh:3; url=index.php');
}else{
    include 'includes/header.php';
    $user_id=$_SESSION['id'];
    $items_query="SELECT i.id,name,price FROM items i INNER JOIN users_items ui ON ui.item_id=i.id WHERE ui.user_id='$user_id'";
    $items_get= mysqli_query($con, $items_query) or die(mysqli_error($con));
    if(mysqli_num_rows($items_get)==0){
        echo "<br><br><br><h1>Add items to cart first!</h1>";
    }else{?>
        <div class="container">
            <div class="table-responsive"><br><br><br>
            <table class="table table-hover table-striped">
                <tbody>
                    <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr><?php
                    $sum=0;$in=0;$id=array();
        while ($arr=mysqli_fetch_array($items_get)){
            $sum=$sum+$arr['price'];array_push($id,$arr['id']);?>
            <tr>
                <td><?php $in=$in+1; echo "$in";?></td>
                <td><?php echo "{$arr['name']}";?></td>
                <td><?php echo "Rs. {$arr['price']}";?></td>
                <td><?php echo "<a href='cart-remove.php?id={$arr['id']}' class='remove_item_link'> Remove</a>" ?> </td>
            </tr>
<?php        } $str= serialize($id);?>
            <tr>
                <td> </td>
                <td> Total</td>
                <td><?php echo "Rs. '$sum'"; ?></td>
                <td><?php echo "<a href='success.php?id={$str}' class='btn btn-lg btn-primary'>Confirm Order</a>" ?></td>
            </tr>
                </tbody>
            </table>
            </div>
        </div> <?php
    }
}?>
</body>
</html>