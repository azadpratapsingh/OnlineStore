<?php
require 'include/common.php';
if (isset($_SESSION['email'])) 
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
<head> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifestyle Store</title>
    
    <link href="index.css" rel="stylesheet" type="text/css"/> 
</head> 
<body> 
   
    <?php
    include 'include/header.php';
    ?>
    
    <div class="content">
       
        <div class="banner-image">
           
            <div class="inner-banner-image">
                 
                <div class="banner_content">
                     <h1>We sell lifestyle</h1>
        <p>Flat 40% OFF on premium brands</p>
        <button><a href="product_page.html">Shop Now</a></button>
                </div>
            </div>
        </div>
    </div>
  
    
     <?php
    include 'include/footer.php';
    ?>
</body> 
</html>