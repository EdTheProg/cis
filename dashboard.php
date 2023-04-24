<?php
    
?>

<!Doctype html>
<html lang="en">
  <head>
    <?php
      include './include/head.html';
      include './include/navbar.html';
    ?>
    <title>DashBoard</title>
  </head>
  <body>
    <div class="container-fluid border border-primary">
      <div class= "container">
      <h2>KYC Form</h2>
  <form>
    <h3>Basic Information</h3>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="lname">Surname:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" required>
      </div>
      <div class="form-group col-md-4">
        <label for="gname">Given Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="mname">Middle Name:</label>
        <input type="text" class="form-control" id="mname" placeholder="Enter your middle name" required>
      </div>
      
</div>
    <hr class="my-4">
    <h3>Employment History</h3>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="company">Company:</label>
        <input type="text" class="form-control" id="company" placeholder="Enter your current or past company" required>
      </div>
      <div class="form-group col-md-4">
        <label for="position">Position:</label>
        <input type="text" class="form-control" id="position" placeholder="Enter your job title" required>
      </div>
      <div class="form-group col-md-4">
        <label for="startdate">Start Date:</label>
        <input type="date" class="form-control" id="startdate" placeholder="Enter your start date" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="enddate">End Date:</label>
        <input type="date" class="form-control" id="enddate" placeholder="Enter your end date" required>
      </div>
    </div>
    <hr class="my-4">
    <h3>Education</h3>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="school">School:</label>
        <input type="text" class="form-control" id="school" placeholder="Enter your school" required>
      </div>
      <div class="form-group col-md-4">
        <label for="degree">Degree:</label>
        <input type="text" class="form-control" id="degree" placeholder="Enter your degree" required>
      </div>
      <div class="form-group col-md-4">
        <label for="field">Field of Study:</label>
        <input type="text" class="form-control">
      </div>

      <input type ="submit">

  </body>
</html>