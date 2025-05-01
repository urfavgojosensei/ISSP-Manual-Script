<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    
    <link rel="icon" type="image/x-icon" href="img_asset/dost_logo.png">
    <title>ISSP Online Help</title>
  </head>

  <body>

    <div class="topbar">

      <div>
        <img src="img_asset/dost_logo.png" alt="">
      </div>

      <div class="banner">
        <h1>ISSP Integrated System</h1>
      </div>
      
    </div>

    <?php
      if ($_GET['param']==('admin')){
        include_once('issp_admin/admin.php');
      }

      else if ($_GET['param']==('is_planner')){
        ?> <h1 align="center">Ongoing Development</h1> <?php
        // include_once('issp_agency/is_planner.php');
      }

      else if ($_GET['param']==('agency_focal')){
        include_once('issp_agency_focal/agency_focal.php');
      }

      else if ($_GET['param']==('office_focal')){
        // ?> <h1 align="center">Ongoing Development</h1> <?php
        // include_once('issp_agency/office_focal.php');
      }

      else{
        ?>
        <h1 align="center">Something went wrong! 1212125</h1>
        <?php
      }
    ?>

  </body>

</html>

