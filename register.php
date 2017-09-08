<?php include('lib/header.php');?>
<?php

    

    $db = mysqli_connect("localhost", "root", "", "user" );
    if(isset($_POST['register_btn'])){

          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $userName = $_POST['username'];
          $password = $_POST['password'];
          $userEmail = $_POST['email'];
          $bloodBank = $_POST['bloodBank'];

          if( $firstName== null && $lastName == null &&  $userName == null && $password == null && $userEmail == null &&  $bloodBank == null){
             
          }


          $reg = mysqli_query($db, "INSERT INTO admin(firstName, lastName, userName, password, userEmail, bloodBank )VALUES ('$firstName', '$lastName', '$userName', '$password', '$userEmail', '$bloodBank')");
                if($reg)
                {
                      echo "Registration Successful";
                }
                else{
                      echo "Registration Failed";
                }
               
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project BloodSeeker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/registrationForm/adminRegistration.css" style="text/css">
</head>
<body>
<div class="container">
<div class="titleHeader">
        <h2 class="formTitle"> Administrator Registration Form </h2>
</div>
</br>
<form method="post" action="">
    <p> First Name </p>
        <input type="text" class="form-control" name="firstName" placeholder="First Name">
    <p> Last Name </p>
        <input type="text" class="form-control" name="lastName" placeholder="Last Name">
    <p> Username </p>
        <input type="text" class="form-control" name="username" placeholder="Username">
    <p> Password </p>
        <input type="password" class="form-control" name="password" placeholder="Password">
    <p> Email </p>
        <input type="email" class="form-control" name="email" placeholder="Email">
    <p> Blood Bank </p>
        <input type="text" class="form-control" name="bloodBank" placeholder="Blood Bank">
        <br>
        <button type="submit" class="btn btn-success" name="register_btn"> Register </button>
    </br>
</form>








</div>

</body>
</html>

















<?php include('lib/footer.php');?>