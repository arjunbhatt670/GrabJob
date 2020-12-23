<?php

include_once('../config.php');
// include_once('notify.php');
session_start();
// notify();

$id = $_SESSION['e_id'];
//echo $id;
if(isset($_SESSION['e_id']))
{
$result2=mysqli_query($db1,"select * from admin");
        $rowa=mysqli_fetch_array($result2,MYSQLI_ASSOC);
}
else
{                                                   
header('location:admin_login.php?msg=please_login');
}
if(isset($_GET['msg']) &&  $_GET['msg']=="jobposted") {

    ?>
    <script type="text/javascript"> alert("Job Successfully Posted");</script>
    <?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $rowa['adm_name']; ?></title>
</head>
<body>

<div id="nav">
    <nav>
        <div class="navbar" id="insidenav">

            <ul class="nav navbar-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Portal</a>
                </div>
                <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout_emp.php">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->
<div class="container-fluid" id="content">

    <aside class="col-sm-3 text-center" role="complementary">
        <div class="region region-sidebar-first well" id="sidebar">
            <h3 class="text-center" style="color: #dd4814"> Welcome <?php echo $rowa['adm_name']; ?></h3> <hr>
            <h4 style="color: red;"></h4>
            <h4> You can manage applied jobs.</h4>
        </div>

    </aside>



    <section class="col-sm-9">
   <div class="container">
    <h3 class="text-center" style="margin-top: 50px; color: #265a88">Jobs Applied are shown below</h3>
    <div class='page-header' style='background:skyblue'></div>
     <?php 
     $q1=mysqli_query($db1,"select * from jobseeker");
     if(mysqli_num_rows($q1)>0) { 
        while($row=mysqli_fetch_array($q1)) {
            $i=1;
            // $job_id=$row['job_id'];
            // $q2=mysqli_query($db1,"select * from jobs where jobid = $job_id");
            // while ( $result = mysqli_fetch_array($q1) ) {
                
                // $comp=mysqli_query($db1,"select * from employer WHERE eid = $result[eid]");
                // $rowcomp=mysqli_fetch_array($comp);
                /*
                echo " <tr> ";
                echo "<td> <a href='view_emp.php?id=".$rowcomp['eid']."'>".$rowcomp['ename']."</a>";
                echo "<td>" . $result['title'] . "</td>";
                echo "<td>" . substr($result['jobdesc'],0,120) ." .......</td>";
                echo "<td>" . $result['postdate'] . "</td>";
                echo "<td>" . $row['date_applied']."</td>";
                echo "<td>  <a style='color: whitesmoke;'  href='view_jobs.php?jid=" . $result['jobid'] . "'><button type='button' class='btn btn-success'>View Job</button> </a></td>";
                echo "</tr>";
                */
               
               echo "<h3>".$row['name']."</h3>"; 
               if($row['photo']!="") {
              echo "<img src = '../uploads/images/".$row['photo']."' class='img-circle' width='10%'>";
             }else echo " <img src='../images/user_fallback.png' width='10%'>";
             if($row['Resume']!="") {
                echo "<a style='color : green' href = '../uploads/resume/".$row['Resume']."' > View resume </a >";
                } else
                echo "<div style='color : red'>resume not uploaded</div>";

               echo   '<p><button type="button" class="btn btn-default" data-toggle="modal" data-target="#changeimg">View Details</button></a>';
            echo "<hr style='background:blue;'>";
         
                 }
        ?>

<div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Information of user</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="../upload.php?type=image" enctype="multipart/form-data">
            <div class="form-group form-inline">Hey! no time left so skipped this part!

            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>



</table>
    <?php } else {  echo " <div class='container'> <div class='alert alert-warning alert-dismissible' role='alert'>
            <button type='button' class='close'  data-dismiss='alert' aria-label='Close'><span
                    aria-hidden='true'>&times;</span></button>
           <p style='font-size: 20px'><strong>Note:</strong> You have'nt applied for any jobs yet!</p>
        </div> </div>";
        }
     ?>
</div>
        </section>
</body>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/employer.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>
