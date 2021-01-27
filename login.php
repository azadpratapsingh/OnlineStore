<?php
require 'include/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forms in Bootstrap</title>
        <link href="index.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body>
        <div class="container">
            <center><h4>Front end validations</h4></center>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  name="email" >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" >
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="#">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>

