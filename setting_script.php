<?php
    require 'include/common.php';
    if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
    $oldPassword = $_POST['old Password'];
    $oldPassword = mysqli_real_escape_string ($con , $oldPassword);
    $oldPassword = md5($oldPassword);

    $newPassword = $_POST['new Password'];
    $newPassword = mysqli_real_escape_string ($con , $newPassword);
    $newPassword=md5($newPassword);

    $newPasswordRe = $_POST['confirm new password'];
    $newPasswordRe = mysqli_real_escape_string ($con , $newPasswordRe);
    $newPasswordRe = md5($newPasswordRe);

    $email = $_SESSION['email'];

    $select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldPassword'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($select_query_result);

    if ($rows > 0 && $newPassword==$newPasswordRe){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
        header("location:setting.php".$success);
    }else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:setting.php".$error);
    }
?>
