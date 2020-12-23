<?php

include_once('../config.php');
session_start();
$id = $_SESSION['id'];

 if(isset($_GET['msg']) && ($_GET['msg']=="applied")){
  ?>
           <script type='text/javascript'>alert("You have successfully applied!!");</script>
           <?php
         }

if(isset($_SESSION['id']))
{
    $q = "select * from login join jobseeker on login.log_id=jobseeker.log_id WHERE login.log_id = $id";
//echo $q;
    $result = mysqli_query($db1, $q);// or die("Selecting user profile failed");
    $row = mysqli_fetch_array($result);
  //  echo $row['log_id'];
    $_SESSION['jsname']=$row['name'];
    $_SESSION['jsid']=$row['user_id'];
}
else
{
    header('location:../login.php?msg=please_login');
}
?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Profile - <?php echo $row['name']; ?></title>



</head>
<body>

<div id="nav">
    <nav class="navbar">
        <div class="navbar" id="insidenav">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Job Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="profile.php">Profile<span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout_user.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->

<!------------------------------------------------------------------------------- -->
<div class="container-fluid" id="content">

<aside class="col-sm-3" role="complementary">
    <div class="region region-sidebar-first well" id="sidebar">
     <h3 style="color: #009999" class="text-center" > Welcome <?php echo $row['name']; ?> </h3>
     </div>

  <!-- profile pic -->
    <div class="thumbnail text-center">
        <div class="img thumbnail">
           <?php if($row['photo']!="") {
              echo "<img src = '../uploads/images/".$row['photo']."' class='img-circle' >";
             }else echo" <img src='../images/user_fallback.png'>";
           ?>
        </div>
         <strong><?php echo $row['name']; ?> </strong>
          <!-- Button trigger modal -->
          <p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeimg">Change Image </button></a>
<!--------------------------- profile pic --------------------------------------- -->
<div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change or upload your profile image</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=image" enctype="multipart/form-data">
            <div class="form-group form-inline">
                <label for="file" class="control-label">Select your photo:</label>
                <input type=file name="file" id="file" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- profile pic -->

</aside>

    <!------------------------------------------------------------------------------- -->
<section class="col-sm-7">
<div id="searchcontent">
<!-- Search content overlay div starts here ------------------------------------ --- -->
<div id="header">
<h3> edit your profile or update your current resume for better jobs!</h3>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#details">Your Profile</a></li>
    <li><a data-toggle="tab" href="#resume">My Resume</a></li>
    <li><a data-toggle="tab" href="#advsearch">Apply Now</a></li>
</ul>

<!------------------------------------------------------------------------------- -->

    <div class="tab-content">

<!------------------------------------------------------------------------------- -->

        <div id="details" class="tab-pane fade in active" style="margin-top: 50px;">
        <h3> Your Profile</h3>
        <table class="table" >
        <tr>
            <td class="tbold">Full Name:</td>
            <td><?php echo $row['name']; ?></td>

        </tr>
        <tr>
            <td class="tbold">Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="tbold">Phone:</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        
    </table>
</div> <!-- profile -->
    <!------------------------------------------------------------------------------- -->
    
<!--------------------------------- Resume ---------------------------------------------- -->

    <div id="resume" class="tab-pane fade">
        <div>
    <form action="../upload.php?type=file" enctype="multipart/form-data" method="post">
       <?php if($row['Resume']==""){
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt uploaded a resume file yet! Upload a attractive resume file for a better job!</p>
        </div>";
}?>

        <h4>Upload your updated resume file:</h4>
        <hr style="background-color: darkslateblue;">
        <div class="form-group" >
            <label class="form-group col-sm-3" for="file" style="font-size:16px; ">Select your resume file:</label>
             <div class="col-sm-7 form-inline">
                 <input type="file" name="file" id="resumefile" class="form-control">
                 <button class="btn btn-success" type="submit" name="submit" value="submit">Upload Resume</button>
             </div>
        </div>
    </form>
        <div class="page-header"></div>
        <?php if($row['Resume']!="") {
                echo "<a href = '../uploads/resume/".$row['Resume']."' > Download Your Current Resume File </a >";
         }?>

        <br>

    </div>
    </div> <!-- resume -->
    <!------------------------------------------------------------------------------- -->

    <div id="advsearch" class="tab-pane fade">
       <div class="container-fluid" id="advsearch" >
           <h2>Apply for jobs</h2>
           <form role="form" method="post" action="register_user.php">
              <table>
                  <tr >
                    <td class="tbold">Work Experience:</td>
                    <td><select class="form-control" name="exp" required name="exp" id="exp">
                           <option value=""> -Select- </option>
                            <option value="1">1 </option>
                             <option value="2">2 </option>
                              <option value="3">3 </option>
                               <option value="4">4 </option>
                                <option value="5"> 5</option>
                                 <option value="6">6 </option>
                                  <option value="7">7 </option>
                                   <option value="7 above"> above 7</option> </select></td>
                  </tr>



                  <tr>
                    <td class="tbold">Annual CTC:</td>
                    <td>
                  <div class="form-inline" id="pay-div">
                         <select class="form-control" id="money" name="money"> 
                           <option value="Rs"> Rs </option>
                           <option value="USD"> USD </option>
                           </select>
                        <input type="text" class="form-control" id="pay" name="pay" required onblur="validate('digit','payer',this.value)">
                   </div>
                   <label class="error" id="payer"></label>
                    </td>
                  </tr>
                  <tr>
                    <td class="tbold">Last Company:</td>
                    <td>
      <label for="employer">Previous company name</label>
        <input id="employer" name="employer" type="text" class="form-control" />
        <label for="startDate">Start Date</label>
        <input id="startDate" name="startDate" type="text" class="form-control" />
        &nbsp;
        <label for="endDate">End Date</label>
        <input id="endDate" name="endDate" type="text" class="form-control" />
                </td>
                  </tr>
                  
                  <tr>
                      <td></td>
                      <td><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Apply Now</button></td>
                   </tr>
              </table>
           </form>
       </div>
        <hr>
        <div id="subcontent">
        <!---- sub content shows advanced search results --------- -->
        </div>
    </div>
<!------------------------------------------------------------------------------- -->
</div> <!-- tab contents -->

</div><!-- closing searchcontent -->
</section> <!-- section 2 ends here -->

</div> <!-- main content div -->

</body>

<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/jobseeker.css" rel="stylesheet">
<script src="search.js"></script>
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/validate.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/js_stuff.js"></script>



</html>
