<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="style/css" href="css/remember.css" rel="stylesheet">
<link rel="stylesheet" href="css/requestForm/requestBlood.css" style="text/css">

<div class="container">
  <div class="row content">
    
    <div class="col-sm-3 sidenav">
        <br><br><br><br>
        <p align="justify">Project Blood Seeker is a student made website by team hokage from La Salle University 
        Ozamis City, it will provide reliable results in every users blood need</p>
        <hr>
        <p><span class="glyphicon glyphicon-map-marker"></span>La Salle University Ozamis City</p>
        <p><span class="glyphicon glyphicon-phone"></span>(Philippines): 0909324289</p>
        <p><span class="glyphicon glyphicon-envelope"></span>E-mail : teamhokage.com</p>
        <hr>
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
           <p>Module 1 presentation this coming thursday<span>March 2,2017</span></p>
           <p>Module 1 presentation this coming thursday <span>March 2,2017</span></p>
           <p>Module 1 presentation this coming thursday <span>March 2,2017</span></p>
        </div>
        <br>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
          <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      <br>
    </div>

<!--<div class="col-sm-9">
    <div class="titleHeader">
     <h2 class="formTitle">Request Form</h2>
    </div>
    <hr>
  <div class="row">
   <div class="col-md-6 mob-con-border">
     <div class="control-group">
        <h4>Name</h4>
         <input type="text" class="form-control" rel="tooltip"  name="name" 
         id="name" placeholder="Please enter the name">
     </div><br>
     <div class="control-group">
        <h4>Date of Birth</h4>
         <input type="date" class="form-control" name="dob" id="dob">
     </div><br>
     <div class="control-group">
        <h4>Blood Group</h4>
          <select class="form-control" name="bloodgroup" id="bloodgroup">
          <option value="0">Select Blood Group</option>
          <option value="A+">A+</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="O">O</option>
          </select>
     </div><br>
     <div class="control-group">
        <h4>City</h4>
          <select class="form-control" name="city" id="city">
          <option value="0">Select City</option>
          <option value="Oroquieta City">Oroquieta City</option>
          <option value="Ozamiz City">Ozamiz City</option>
          <option value="Tangub City">Tangub City</option>
          </select>
     </div><br>
     <div class="control-group">
        <h4>Contact Email</h4>
          <form action="/action_page.php" autocomplete="on">
          <input class="form-control" type="email" name="email" id="email" autocomplete="off" placeholder="Please enter the contact email">
          </form>
     </div>
     <div class="control-group">
        <h4>Contact Number</h4>
          <input type="text" class="form-control" rel="tooltip"  name="contactnumber" 
          id="contactnumber" placeholder="Please enter the contact number">
     </div><br>
     <div class="controls btn-bbi-group">
        <button type="submit" class="btn btn-success">Submit Request</button>
    </div>
    </div>
  </div>
</div>-->

      <div class="col-sm-9">
        <center><h2><span><b>Request Blood</b></span></h2></center>
        <hr>
          <div class="row">
            <div class="col-md-6 mob-con-border">
              <table>
              <h4><span class="headings"><b>Patient Details</b></span></h4>
                <tr>
                  <th><span>Patient Name</span></th>
                  <th><span>Hospital Name and Address</span></th>
                </tr>
                <tr>
                  <th><input type="text" class="form-control" rel="tooltip"  name="pname" 
                      id="pname" placeholder="Please enter the Name">
                  </th>
                  <th><input type="text" class="form-control" rel="tooltip"  name="hnameAdd" 
                      id="hnameAdd" placeholder="Please enter the Hospital Name and Address">
                  </th>
                </tr>
                <tr>
                  <th><span>Blood Group</span></th>
                  <th><span>City</span></th>
                </tr>
                <tr>
                  <th><select class="form-control" name="bloodgroup" id="bloodgroup">
                      <option value="0">Select Blood Group</option>
                      <option value="A+">A+</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="O">O</option>
                      </select>
                      <hr>
                  </th>
                  <th><select class="form-control" name="city" id="city">
                      <option value="0">Select City</option>
                      <option value="Oroquieta City">Oroquieta City</option>
                      <option value="Ozamiz City">Ozamiz City</option>
                      <option value="Tangub City">Tangub City</option>
                      </select>
                      <hr>
                  </th>
                </tr>
              <table>
              <h4><span class="headings"><b>Contact Details</b></span></h4>
                <tr>
                  <th><span>Contact Name</span></th>
                  <th><span>Contact Email Address</span></th>
                </tr>
                <tr>
                  <th><input type="text" class="form-control" rel="tooltip"  name="cname" 
                      id="cname" placeholder="Please enter the Contact Name">
                  </th>
                  <th><input class="form-control" type="email" name="email" id="email" autocomplete="off" 
                      placeholder="Please enter the Contact Email Address">
                  </th>
                </tr>
                <tr>
                  <th><span>Contact Numbe</span>r</th>
                </tr>
                <tr>
                  <th><input type="text" class="form-control" rel="tooltip"  name="contactnumber" 
                      id="contactnumber" placeholder="Please enter the Contact Number">
                  </th>
                </tr>
              </table>
              </table>
            </div>
          </div>
      </div>

                <div class="controls btn-bbi-group">
                  <center><button type="submit" class="btn btn-info btn-lg btn-danger">
                  <h4>Submit Request<h4></button></center>
                </div>
  </div>
</div>


