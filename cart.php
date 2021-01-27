<?php
    include 'include/common.php';
?>
<!DOCTYPE html>
<html >
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cart </title>
    <link href="index.css" rel="stylesheet" type="text/css"/> 
    <style>
        #top{
            margin-top: 50px;
        }
        </style>
</head>
<body>
    
    <?php
        require 'include/header.php';
    ?>
    

    
        <div class="content">
        <div class="container" id="top">        
        
     <!--   <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <table class="table table-striped table-responsive">-->
        <?php
        if(isset($_GET['email'])){
            $disc=$_GET['email'];
        }
        $sum = 0;
        $user_id = $_SESSION['user_id'];
       $query = "SELECT items.id,items.price AS price,items.name AS name FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
     
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        require 'include/footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>

