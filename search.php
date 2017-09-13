<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="style/css" href="css/header.css" rel="stylesheet">
<link rel="stylesheet" href="css/header.css" style="text/css">

  
<div class="container">

    <!-- Must have a design here-->

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Blood Seeker</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="search.php">Search Blood</a></li>
          <li><a href="request.php">Request Blood</a></li>
          <li><a href="donate.php">Donate Blood</a></li>
        </ul>
      </div>
    </nav>
</div>

<title> BloodSeeker - Search Blood </title>
<div class="container">
    <div>
        <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Blood Type</span> 
        <select class="form-control" id="sel1">
            <option>A+</option>
            <option>A</option>
            <option>B</option>
            <option>O</option>
        </select>

        <span class="input-group-addon" id="sizing-addon1">Blood Bank</span> 
        <select class="form-control" id="sel1">
            <option>Oroquieta City Chapter</option>
            <option>Ozamiz City Chapter</option>
            <option>Tangub City Chapter</option>
        </select>
        
        <span class="input-group-addon" id="sizing-addon1"><button class="btn btn-default" type="button">
        <span class="glyphicon glyphicon-search"></span></span>
        
        </div>
        </br>
    </div>





</div>









<?php include('lib/footer.php');?>