<?php
require 'include/common.php';
if(isset($_SESSION['email']))
{
    header('location: product_page.php');
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
        <title>sign up</title>
        <style>
                   footer{
 position:fixed;
 bottom:0;
 left:0;
 right:0;
}
#top {
  min-width: 200px;
  margin: 150px 150px 150px 400px;
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
       <div id="top" class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1> Sign Up </h1>
                    <form method="post" action="signup_script.php">  
                        <input type="text"   value="name"><br><br>
                        
                          <input type="email" class="form-control"   name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                          
                           <input type="password" class="form-control"  name="password" required = "true" pattern=".{6,}">
                          <input type="text"   value="contact"><br><br>
                           <input type="text"   value="city"><br><br>
                          <input type="text"   value="address"><br><br>
                          <button class="btn btn-primary">submit</button>
                    </form>
                </div>        
            </div>
       </div>
         <?php
      include 'include/footer.php';
      ?>
    </body>
</html>


