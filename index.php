<?php include('lib/header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/registerButton.css" style="text/css">
  <link rel="stylesheet" href="css/login.css" style="text/css">
  <link rel="stylesheet" href="css/header.css" style="text/css">
</head>
<body>

  <form class="navbar-form navbar-right " role="search" action="" method="post">
                      <div class="form-group">
                          <input type="text" class="form-control" name="userName" placeholder="Username">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default btn-primary">Sign In</button><br>
  </form>

<!--start of carousel-->
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/img1.jpg" alt="Philippine Red Cross">
        <div class="carousel-text">
        <h2>Give Blood</h2>
        <h2>for those who give life.</h2>
        </div>
      </div>

      <div class="item">
        <img src="img/img2.png" alt="Philippine Red Cross">
        <div class="carousel-text">
        <h2>Blood donation it will cost you nothing,</h2>
        <h2>it will save a life.</h2>
        </div>
      </div>
    
      <div class="item">
        <img src="img/img3.jpg" alt="Philippine Red Cross">
        <div class="carousel-text">
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood cannot be manufactured.</h2>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It will always a gift from someone.</h2>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!--<div class="carousel-text">
    <h2>Naa tay Ibutang diri nga text chu2x !!!!!!! hahahaha</h2>
  </div>-->
  <button type="button" class="btn btn-info btn-lg btn-danger" data-toggle="modal" data-target="#myModal">Register Now!</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Now</h4>
        </div>
        <div class="modal-body">
            <ul class="nav">
                <li><a href="#">Register as Donor</a></li>
                <li><a href="register.php">Register as Admin</a></li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>




  
</div>
<!--end of carousel-->





</body>


</br>
</br>
<?php include('lib/footer.php');?>
</html>

