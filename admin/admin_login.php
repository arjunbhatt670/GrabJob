<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin</title>
      <?php
      if(isset($_GET['msg']) && ($_GET['msg']=="failed")){
          ?>
          <script type='text/javascript'>alert("Login Failed: Invalid Username or Password!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=='please_login'))
          {
          ?>
          <script type="text/javascript">alert("Please Login First to access your profile!");</script>
          <?php
      }
      ?>
  </head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Job Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Admin Sign In</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="../login.php">Log in</a></li>
        </ul>
      </li>
      </ul>
  </div>
</nav>
  <body>
    <div class="container col-sm-5 pull-right">
        <form class="form-signin" action="process_regemp.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
             <label for="u_name" class="sr-only">Username</label>
                <input type="text" id="u_name" class="form-control" placeholder="Username" required autofocus name="u_name">
             <label for="inputPassword" class="sr-only">Password</label>
                 <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
              <div>Account will be created if doesn't exist</div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>



  </body>

<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link href="../css/signin.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</html>
