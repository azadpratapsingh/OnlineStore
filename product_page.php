<?php
require 'include/common.php';
require 'include/check_if_added.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>product page</title>
        <style>
                  footer{
 position:fixed;
 bottom:0;
 left:0;
 right:0;
}
        </style>
        <link href="index.css" rel="stylesheet" type="text/css"/> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1><br>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                   have all in one place
                </p>
            </div>
        </div>
         <div class="container">
           
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="imgboot/5.jpg" alt="">
                            <div class="caption">
                                <h3>Cannon EOS</h3>
                                <p>Price:Rs. 36000.00</p>
                                <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                            if (check_if_added_to_cart(1)) 
                                                {
                                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                                } else { 
                                                    ?> 
                                                      <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                   <?php 
                                                      } 
                                    
                                         }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="imgboot/2.jpg" alt="">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs. 40000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(2)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="imgboot/3.jpg" alt="">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs. 50000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(3)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                            <img src="imgboot/4.jpg" alt="">
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price:Rs. 80000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(4)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/9.jpg" alt="">
                            <div class="caption">
                                <h3>Titan Model #301</h3>
                                <p>Price:Rs. 13000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(5)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/10.jpg" alt="">
                            <div class="caption">
                                <h3>Titan Model #201</h3>
                                <p>Price:Rs. 3000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(6)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/11.jpg" alt="">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price:Rs. 8000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(7)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/12.jpg" alt="">
                            <div class="caption">
                                <h3>Faber Luba #111</h3>
                                <p>Price:Rs. 18000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(8)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/8.jpg" alt="">
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>Price:Rs. 800.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(9)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/6.jpg" alt="">
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price:Rs. 1000.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(10)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/13.jpg" alt="">
                            <div class="caption">
                                <h3>John Zok</h3>
                                <p>Price:Rs. 1500.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(11)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                <div class="col-md-3 col-sm-6">
                     <div class="thumbnail">
                            <img src="imgboot/14.jpg" alt="">
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price:Rs. 1300.00</p>
                                  <?php 
                                if (!isset($_SESSION['email']))
                                    { ?>
                                <p>
                                    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                                </p>
                                    <?php 
                                    }
                                     else 
                                         { //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(12)) {
                                  
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 
                                <?php 
                                    } 
                                    
                                    }
                                    ?>
                                 <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    
                </div>
                 
            </div>
        </div>
       <?php
        include 'include/footer.php';
       ?>
    </body>
</html>

