<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title> E-Store</title>
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
                header('location:index.php');
            }
            include 'includes/header.php';
            include 'includes/check-if-added.php';
        ?>
        <br><br>
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 1</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/1.jpeg" alt="">
                            <div class="caption">
                                <h4>Asus Zenfone Max Pro M2</h4>
                                <p>6 GB RAM | 64 GB ROM <br> Rs.9,999</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(13)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                                <a href="cart-add.php?id=13" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 2</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/2.jpeg" alt="">
                            <div class="caption">
                                <h4>Redmi Note 6 Pro</h4>
                                <p>6 GB RAM | 64 GB ROM <br> Rs.11,999</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(14)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                            <a href="cart-add.php?id=14" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 3</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/3.jpeg" alt="">
                            <div class="caption">
                                <h4>Asus Zenfone Max M2</h4>
                                <p>4 GB RAM | 64 GB ROM <br>Rs.8,499</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(15)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                            <a href="cart-add.php?id=15" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 4</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/4.jpeg" alt="">
                            <div class="caption">
                                <h4>Honor 9N</h4>
                                <p>13MP+2MP | 16MP Camera<br>Rs.8,999</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(16)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                            <a href="cart-add.php?id=16" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 5</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/5.jpeg" alt="">
                            <div class="caption">
                                <h4>Realme 2 Pro</h4>
                                <p>3,500mAh Battery <br>Rs.12,990</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(17)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                            <a href="cart-add.php?id=17" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="panel thumbnail">
                        <div class="panel-heading">
                            <h3>Mobile 6</h3>
                        </div>
                        <div class="panel-body">
                            <img src="img/6.jpeg" alt="">
                            <div class="caption">
                                <h4>Google Pixel 3</h4>
                                <p>5.5" FHD+ Display<br>Rs.59,999</p>
                            </div>
                        </div>
                        <div class="panel-footer"> <?php
                            if (check_if_added_to_cart(18)) { 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                            <a href="cart-add.php?id=18" name="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>