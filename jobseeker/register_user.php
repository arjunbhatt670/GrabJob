<?php

 include_once('../config.php');
 session_start();
$id=$_SESSION['jsid'];
$exp=$_POST['exp'];
$ctc = $_POST['money']." ".$_POST['pay'];
$employer_comp=$_POST['employer'];
$sd=$_POST['startDate'];
$ed=$_POST['endDate'];

mysqli_select_db($db1,"jobportal");
 $cmd = mysqli_query($db1, "update jobseeker set experience= '$exp', ctc='$ctc', emp_comp='$employer_comp', sd='$sd', ed='$ed' WHERE user_id='$id'");

 //$result2 = mysqli_query($db1,$query5);
if (!$cmd)	
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:profile.php?msg=applied');
}

?>