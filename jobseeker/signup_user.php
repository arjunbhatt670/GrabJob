   <!DOCTYPE HTML>
    <html>
    <head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Seeker Registration</title>
         <script type="text/javascript">
             function checkForm() {

// Fetching values from all input fields and storing them in variables.
var email = document.getElementById("emailerror").innerHTML;
var pass1 = document.getElementById("passerror").innerHTML;
var pass2 = document.getElementById("passerror2").innerHTML;
var name = document.getElementById("nameerror").innerHTML;
var mobno = document.getElementById("mobnoerror").innerHTML;
//Check input Fields Should not be blanks.
var p1=document.getElementById("passnew").value;
var p2=document.getElementById("passconf").value;
    if (p1 != p2) {
        document.getElementById("passerror2").innerHTML="Password Do not Match" ;
        return false;
    }
    else
    {
        document.getElementById("passerror2").innerHTML="" ;

    }

if(email == '' && pass1 == '' && pass2 == '' &&  name == "" && mobno == '') {
    //document.getElementById("reguser").submit();
                     return true;
}
else {
alert("Fill in with correct information");
                     return false;

}
        }

 
 </script>
    </head>
    <body>
        
        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Signup</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">

    <div class="container">

    <FORM id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
    <h3 class="h3style"> Your Login Detials </h3>
    

     <div class="form-group">
        <label class="control-label col-sm-2" for="email" >Enter your Email ID:</label>
        <div class="col-sm-4">
             <input type="email" name="useremail" placeholder="Your E-mail" class="form-control" id="email" 
                        required onblur="validate('email','emailerror',this.value)">
        </div>
        <label id="emailerror" class="error" ></label>
     </div>  

     <div class="form-group"> 
         <label class="control-label col-sm-2 " for="passnew" > Create new Password:</label>
         <div class="col-sm-4">  <input type="password" id="passnew" placeholder="New Password" name="pass1" class="form-control" 
                      required onblur="validate('password','passerror',this.value)">
         </div>
        <label id="passerror" class="error"></label>
    </div>

    <div class="form-group">
            <label class="control-label col-sm-2" for="passconf">Confirm the Password:</label>
               <div class="col-sm-4">        
                <input type="password" id="passconf" placeholder="Confirm Password" name="pass2" class="form-control" required onblur="validate('password','passerror2',this.value)">
                   </div>
                   <label class="error" id="passerror2"></label>
            </div> 


    <div class="page-header"></div>
    <h3 class="h3style">Your Contact Information</h3>
    


   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Mention your Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="name" placeholder="Your Name" name="uname" class="form-control" 
                    required onblur="validate('username','nameerror',this.value)"> 
                </div>
         <label id="nameerror" class="error"></label>
    </div>


 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required onblur="validate('mobilenum','mobnoerror',this.value)">
                 </div>
                  <label id="mobnoerror" class="error"></label>
      </div>
 

<div class="page-header"> </div>

        <div class="form-group form-inline col-sm-10">

        <button class="btn btn-success" type="submit"  id="reg" value="submit">Register</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>

</div>

    </form>
        <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/jobseeker.css" rel="stylesheet">
        <script type="text/javascript" src="../js/validate.js"></script>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>  
    <!-- <script src="../location/location.js"></script>   -->
    </body>
    </html>
