
<?php
require 'include/common.php';
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
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>setting</title>
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
                    <h1> Change Password </h1>
                    <form  method="post" action="setting_script.php">  
                          <input type="text"   value="old password"><br><br>
                          <input type="text"   value="new password"><br><br>
                           <input type="text"   value="confirm new password"><br><br>
                         
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

