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

          $reg = mysqli_query($db, "INSERT INTO admin(firstName, lastName, userName, password, userEmail, bloodBank )VALUES ('$firstName', '$lastName', '$userName', '$password', '$userEmail', '$bloodBank')");
                if($reg)
                {
                      echo "Registration Successful";
                else{
                      echo "Registration Failed";
                }

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
</head>
<body>
<div class="container">
<h2> Registration Form </h2>
</br>
<form method="post" action="">
    <p> First Name </p>
        <input type="text" class="form-control" name="firstName" placeholder="Text input">
    <p> Last Name </p>
        <input type="text" class="form-control" name="lastName" placeholder="Text input">
    <p> Username </p>
        <input type="text" class="form-control" name="username" placeholder="Text input">
    <p> Password </p>
        <input type="password" class="form-control" name="password" placeholder="Text input">
    <p> Email </p>
        <input type="email" class="form-control" name="email" placeholder="Text input">
    <p> Blood Bank </p>
        <input type="text" class="form-control" name="bloodBank" placeholder="Text input">
    <p> Blood Bank </p>
        <button type="submit" class="btn btn-success" name="register_btn"> Register </button>
    </br>
</form>








</div>

</body>
</html>

















<?php include('lib/footer.php');?>