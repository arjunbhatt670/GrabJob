<?php
 include_once('../config.php');
// Data retreived  begins here
$email=$_POST['useremail'];
//echo $email;
$password=$_POST['pass1'];
$hash = password_hash($password, PASSWORD_DEFAULT);
//echo $password;
$name=$_POST['uname'];
$mobile=$_POST['mobno'];
// data retreived ends here

mysqli_select_db($db1,"jobportal");

$query1="INSERT INTO login (email,password) VALUES ('$email','$hash')";
    $result1 = mysqli_query($db1,$query1) or die("Cant Register , The user email may be already existing");
$query2 =  "INSERT INTO jobseeker (log_id,name,phone)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$mobile')";

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query2))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:../login.php?msg=registered');
}

?>