<?php
$error = "";
if(isset($_POST['login_btn'])){
  if(empty($_POST['username']) || empty($_POST['password'])){
      $error = "Invalid Username or Password";
  }
  else{
      $userName = $_POST['username'];
      $password = $_POST['password'];

      $db = mysqli_connect("localhost", "root", "", "user" );
      
      $log = mysqli_query($log, "SELECT * FROM admin WHERE userName='$username' AND password='$password'");

      if ($log == 1){
         echo "sign in successfull";
      }
      else{
          $error = "Invalid Username or Password";
      }
      mysqli_close($log);

  }

}


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="style/css" href="Blood/css/remember.css" rel="stylesheet">

  
<div class="container">

    <!-- Must have a design here-->

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Blood Seeker</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="search.php">Search Blood</a></li>
          <li><a href="request.php">Request Blood</a></li>
          <li><a href="donate.php">Donate Blood</a></li>
        </ul>
         <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="button" name="login_btn" class="btn btn-default">Sign In</button><br>
                    <div class="checkbox">
                        <label><input type="checkbox" class="remember"> Remember me</label> <!-- Pending sa ni, dapat ang color sa remember me sa log in page kay puti-->
                    </div>
          </form>

 
    </div>
    </nav>
    </div>
