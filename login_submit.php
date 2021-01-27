<?php
//require 'include/common.php';
$con = mysqli_connect("localhost", "root", "", "store","3308") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$email= mysqli_real_escape_string($con, $email);

$password= $_POST['password'];
$passowrd= mysqli_real_escape_string($con, $password);
$password=md5($password);
$con = mysqli_connect("localhost","root","","store","3308") or die(mysqli_error($con));
$select_query = "SELECT email FROM users WHERE email='".$email."' and password='".$password."'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_query_result)==0)
{
    echo  "Not Registered";
}
else{
$row = mysqli_fetch_array($select_query_result);
$_SESSION['id'] = $row['id'];
$_SESSION['email'] = $row['email'];
}
if (isset($_SESSION['email'])){
    header('location:products.php');
  }
?>


