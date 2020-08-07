<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">E-Store</a>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right"> 
                <?php if (isset($_SESSION['email'])) {
                    ?>
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php }
                else { ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email"  class="form-control" name="email" id="email" placeholder="E-Mail" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"  class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                <button type="submit" class="btn btn-primary" value=”login_submit”>Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>