<?php include('lib/header_admin.php');?>

<?php

    $db = mysqli_connect("localhost", "root", "", "blood_bank" );
    if(isset($_POST['add_btn'])){

          $blood_id = $_POST['blood_id'];
          $blood_type = $_POST['blood_type'];
          $blood_location = $_POST['blood_location'];
          $date_donated = $_POST['date_donated'];
          $donator_name = $_POST['donator_name'];

          $reg = mysqli_query($db, "INSERT INTO blood(blood_id, blood_type, blood_location, date_donated, donator_name )VALUES ('$blood_id', '$blood_type', '$blood_location', '$date_donated', '$donator_name' )");
                if($reg)
                {
                      echo "Successfully Added";
                }
                else{
                      echo "Adding Failed";

                }
    }

?>

<div class="container">
<div class="form-group row">
    <form method="post">
     <div class="col-xs-2">
        <label>Blood ID</label>
        <input class="form-control" type="text" name="blood_id">
      </div>

       <div class="col-xs-2">
        <label>Blood Type</label>
        <input class="form-control" type="text" name="blood_type">
      </div>

       <div class="col-xs-2">
        <label>Blood Bank Location</label>
        <input class="form-control" type="text" name="blood_location">
      </div>

       <div class="col-xs-2">
        <label>Date Donated</label>
        <input class="form-control" type="text" name="date_donated">
      </div>

       <div class="col-xs-2">
        <label>Donator's Name</label>
        <input class="form-control" type="text" name="donator_name">
      </div>

      <div class="col-xs-2">
      <button type="submit" class="btn btn-success btn-lg" name="add_btn">Add Record</button>
      </div>
      </form>
    </div>


<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Blood ID</th>
        <th>Blood Type</th>
        <th>Blood Location</th>
        <th>Date Donated</th>
        <th>Donator Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td name="blood_id">1</td>
        <td name="blood_type">Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>








































</div>









<?php include('lib/footer.php');?>