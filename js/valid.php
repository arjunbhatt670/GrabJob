<?php

include_once('../config.php');
$value = $_GET['query'];
$formfield = $_GET['type']; // type of validation to do

// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {

	 if($value=="")
    echo "Name Cant be empty";
}

// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
    if($value=="")
    echo "password cant be empty";
}

// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
    $sql = "SELECT email FROM login WHERE email = '$value'";
    $select = mysqli_query($db1, $sql);

    if($value=="")
    echo "Enter your email";
 else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value) ||  (mysqli_num_rows($select) > 0)) {
echo "Invalid email or Email already taken";
} 
}


//mobile no validation
if ($formfield == "mobilenum") {
	$mob="/^[1-9][0-9]*$/"; // this is a regular expresssion
	if($value=='')
		echo "Enter your phone number";

else if ( ( !preg_match($mob, $value) ) || ( strlen($value) < 10 )) {
echo "Enter a valid phone number";
} 
}


if ($formfield == "digit") {
    if(!is_numeric($value))
   {
       echo "Input should be numeric";
   }
}


?>