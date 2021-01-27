<?php
include 'include/common.php';
if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Success</title>
     
         <link href="index.css" rel="stylesheet" type="text/css"/> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php

$item_id = $_GET['item_id'];
$user_id = $_SESSION['user_id'];
$query= " UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND item_id IN ('$item_id') AND status='Added to cart'";
$update_name_result = mysqli_query($con, $query) or die(mysqli_error($con). "query not executed");
?>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="alert alert-success">
<strong>Your order is confirmed</strong> Thank you for shopping with us.<br>
<a href="product_page.php">Click here </a> to purchase any other item.
</div>
</div>
</div>
         <?php
        include 'include/footer.php';
         ?>
    </body>
</html>


