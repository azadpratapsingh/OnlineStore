<?php

require 'include/common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

$password = $_POST['password'];
    $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
      if($select_rows!=0)
          {
           $error = "<span class='red'>Email Already Exists</span>";
          }
      else if (!preg_match($regex_email, $email)) 
          {
           echo "Incorrect email";
          }
      else if (strlen($password) < 6)
          {
           echo "Password should have at-least 6 characters";
          }
          else{
        $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:product_page.php');
    }
?>

