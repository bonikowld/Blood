<?php include('lib/header.php');?>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood_bank";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(isset($_POST['register_btn'])){

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $bloodbank = $_POST['bloodbank'];

        //   if( $firstName== null && $lastName == null &&  $userName == null && $password == null && $userEmail == null &&  $bloodBank == null){
             
        //   }


        mysqli_query($conn,"INSERT INTO admin(firstname, lastname, username, password, email, bloodbank )VALUES ( '".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$email."', '".$bloodbank."')");
                // if($sql)
                // {
                //       echo "Registration Successful";
                // }
                // else{
                //       echo "Registration Failed";
                // }
                mysqli_close($conn);
               
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
        <input type="text" class="form-control" name="firstname" placeholder="First Name">
    <p> Last Name </p>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
    <p> Username </p>
        <input type="text" class="form-control" name="username" placeholder="Username">
    <p> Password </p>
        <input type="password" class="form-control" name="password" placeholder="Password">
    <p> Email </p>
        <input type="email" class="form-control" name="email" placeholder="Email">
    <p> Blood Bank </p>
        <input type="text" class="form-control" name="bloodbank" placeholder="Blood Bank">
        <br>
        <button type="submit" class="btn btn-success" name="register_btn"> Register </button>
    </br>
</form>








</div>

</body>
</html>

















<?php include('lib/footer.php');?>