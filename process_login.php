<?php
include_once('config.php');

$email=$_POST['email'];
$passd=$_POST['password'];
$query=mysqli_query($db1,"select * from login where email='$email'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

if(($result>0) && ( password_verify( $passd, $result['password'] ) ) ){
          session_start();
        $_SESSION["id"] = $result['log_id'];
        header('location:jobseeker/profile.php?msg=success');
    }
else
{
header('location:login.php?msg=failed');
}
?>