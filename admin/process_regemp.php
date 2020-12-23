<?php
include_once('../config.php');
session_start();
$u_name=$_POST['u_name'];
$password=$_POST['inputPassword'];
$hash = password_hash($password, PASSWORD_DEFAULT);
// echo($u_name.$password);



$query=mysqli_query($db1,"select * from admin where adm_name='$u_name'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
    if($result==0){
    	mysqli_query($db1,"insert into admin(adm_name,adm_pass) values('$u_name','$hash')");
    	$result2=mysqli_query($db1,"select adm_id from admin where adm_name='$u_name'");
    	$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);
        $_SESSION["e_id"] = $row['adm_id'];
    	header('location:dashboard.php?msg=registered');

    } else{
    		if(password_verify( $password, $result['adm_pass'] )){
       			 $_SESSION["e_id"] = $result['adm_id'];
    			header('location:dashboard.php?msg=success');
    		} else{
    			header('location:admin_login.php?msg=failed');
    		}
    }


?>