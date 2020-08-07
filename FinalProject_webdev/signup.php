<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
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
    <?php require 'includes/common.php'; 
    include 'includes/header.php';?>
    <br><br><br>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6">
                <div class="container">
                <img src="img/yess.jpg" alt="">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">SIGN UP</div>
                    <div class="panel-body">
                        <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required="true">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="true">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required="true">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="tel" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>