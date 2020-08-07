<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
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
        <?php require 'includes/common.php';
        include 'includes/header.php';
        if(!isset($_SESSION['email'])){
            header('location:index.php');
        }?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1> Change Password </h1>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password"  class="form-control" name="old-password" id="old-password" placeholder="Old Password" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="new-password" id="new-password" placeholder="New Password" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="re-new-password" id="re-new-password" placeholder="Re-type New Password" >
                        </div>
                        <button type="submit" class="btn btn-primary" value="settings_submit">Change</button>
                        <br>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>
