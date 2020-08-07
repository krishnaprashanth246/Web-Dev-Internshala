<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title> E-Store - Contact</title>
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
        ?>
        <br><br><br>
        <div class="row">
            <div class="container">
                <div class="col-xs-10">
                <h2>LIVE SUPPORT</h2>
                <h4>24 hours|7 days a week|365 days a year Live Technical Support</h4>
                <p>It's a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority
have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use a
passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
                <div class="col-xs-2">
                    <img src="img/contact.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-8">
                    <h2>CONTACT US</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required="true">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" style="height:200px; width:100%"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value=”submit”>Submit</button>
                    </form>
                    <br>
                    <br>
                </div>
                <div class="col-xs-4">
                    <h2>COMPANY INFORMATION</h2>
                    <p>500 Lorem Ipsum Dolor Sit,<br>
                        22-56-2-9 Sit Amet, Lorem,<br>
                        USA<br>
                        Phone:(00) 222 666 444<br>
                        Fax: (000) 000 00 00 0<br>
                        Email: info@mycompany.com<br>
                        Follow on: Facebook, Twitter<br>
                    </p>
                </div>
            </div>
        </div>
        <?php        include 'includes/footer.php'; ?>
    </body>
</html>