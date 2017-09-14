<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="style/css" href="css/header.css" rel="stylesheet">
<link rel="stylesheet" href="css/header.css" style="text/css">

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 35%;
      margin: auto;
  }
  h1, h2, h4 {
    color: black;
  }
</style>

  
<div class="container">

    <!-- Must have a design here-->

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Blood Seeker</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="search.php">Search Blood</a></li>
          <li><a href="request.php">Request Blood</a></li>
          <li class="active"><a href="donate.php">Donate Blood</a></li>
        </ul>
      </div>
    </nav>
</div>

<div class="container">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/donate-blood1.png" alt="Philippine Red Cross" width="460" height="345">
        <div class="carousel-text">
          <h2 align="center">Give the gift of Life</h2>
          <h1 align="center">Donate Blood</h1>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="img/donate-blood2.png" alt="Philippine Red Cross" width="460" height="345">
        <div class="carousel-text">
          <h2 align="center">Anybody can give</h2>
          <h1 align="center">Blood</h1>
        </div>
      </div>
    
      <div class="item">
        <img src="img/donate-blood3.png" alt="Philippine Red Cross" width="460" height="345">
        <div class="carousel-text">
          <h2 align="center">You don't have to be a doctor to save lives.</h2>
          <h1 align="center">Just Donate Blood</h1>
          <h4 align="center">it's safe, it's simple and it's saves lives</h4>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>


<?php include('lib/donateblood.php');?>

<?php include('lib/footer.php');?>