
<?php include_once("../admin.auth/auth.php"); ?>

<?php require_once("../includes/dbconn.php");?>
<?php include_once("../functions.php"); ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
    <link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!--font-Awesome-->
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>


<?php include("../includes/navigation2.php"); ?>
  <body>


        <div style="margin-top:100px" class="container">
          <?php

             if (isset($_POST['cupon_id'])) {

                 $cupon_no=$_POST['cupon'];
                 $rupees=$_POST['rupees'];

                  $sqlc="SELECT * FROM cupons WHERE cupons = '$cupon_no' ";
                  $resultc=$conn->query($sqlc);
                  if ($rowc=$resultc->num_rows == 1) {
                    ?>
                     <script type="text/javascript">
                          alert("cupon already added");
                     </script>
               <?php
                  } else{

                 $sql= "INSERT INTO cupons (cupons, rupees, status) VALUES ('$cupon_no',$rupees,0)";
                 $conn->query($sql);
                ?>
                 <script type="text/javascript">
                      alert("cupon added sucessfully");
                 </script>
           <?php
          }
          }

           ?>

          <h1 align="center">welcome to admin Panel</h1><hr>
      <form style="margin-left:400px" class="form-group" action="" method="post">

      <input style="width:30%;margin-left:40px;border:2px solid green" class="form-control" type="text" name="cupon" value=""placeholder="enter cupon"> <br>
      <input style="width:30%;margin-left:40px;border:2px solid green" class="form-control" type="text" name="rupees" value=""placeholder="enter amount"> <br>
      <button style="margin-left:100px" class="btn btn-success" type="submit" name="cupon_id">Add Cupons</button>




      </form>
    </div>

  </body>
</html>
