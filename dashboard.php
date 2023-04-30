<?php
    
?>

<!Doctype html>
<html lang="en">

<head>
  <?php
      include './include/head.html';
      
    ?>
  <title>DashBoard</title>
</head>

<body>
  <div class="container-fluid " >
    <div class="row" >
      <div class="col-md-3 border border-danger" >1

      </div>
      <div class="col-md-9 border border-primary" >
        <?php
          include 'addCustomer.html';
        ?>
        
      </div>
    </div>
  </div>
</body>

</html>