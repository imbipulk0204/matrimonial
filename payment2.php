<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!--font-Awesome-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--font-Awesome-->
    <style media="screen">
      body{

      }
  #balance  {
    background-color: ;
       margin-left:69rem;
       margin-right:100px;
       margin-top:18px;
       color:black;
       /* border:2px solid black; */
       align=right;
     }
     #purchase{

     margin-top: -300px;
     margin-left: 10px;

     }
    </style>
  </head>
  <?php include_once "includes/navigation.php";?>
  <?php 
    if (isset($_SESSION["cupon_id"])) {
    echo $_SESSION["cupon_id"];
       $cupon = $_SESSION['cupon_id'];
         
        echo $cupon;

    $sql = " UPDATE cupons set status = 1  where cupons = '$cupon' ";
     $result = $conn->query($sql);
    
}
   unset($_SESSION["cupon_id"]);

      ?>     <h6>Refreshing the page will delete the cupon.</h6>
        <h5>*do not refresh the page until you save the cupon number</h5>
          



  <body>

    <div align="center">
      <?php
if (isset($_POST["payment"])) {
    //echo $_POST["payment"];
    $user_id = $_SESSION['id'];
    $cupon = $_POST['payment'];
    //echo $user_id;
    $sql3 = "SELECT * FROM cupons WHERE cupons = '$cupon' AND status = 1 AND valid_status = 0 ";
    // $result3=$conn->query($sql3);
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    //  echo $row3['status'];

    if ($row3 = $result3->num_rows == 1) {

        $sql34 = "SELECT * FROM cupons WHERE cupons = '$cupon' ";
        $result34 = $conn->query($sql34);
        $row34 = mysqli_fetch_assoc($result34);
        $rupee = $row34['rupees'];
        //  echo $row34['status'];

        if ($row34['status'] == 1) {
            // $statusadd=1;

            $sqlupdate = " UPDATE cupons set valid_status = 1  where cupons='$cupon' ";
            $resultu = $conn->query($sqlupdate);
           
            //die("nh hua ");
            // echo $resultu;
        }

        //    $user_id=$_SESSION['id'];
        $sqlbc = " SELECT * from balance where user_id = $user_id ";
        $resultbc = $conn->query($sqlbc);
        //  $rowbc=$resultbc->fetch_assoc();
        //  $balance= $rowb['balance'];

        if ($rowbc = $resultbc->num_rows == 0) {

            $sqlinsert = "INSERT into balance( user_id,balance) VALUE ($user_id,$rupee) ";
            $result12 = $conn->query($sqlinsert);
            
            

        } else {

            //    $sqlinsert="INSERT into balance( user_id,balance) VALUE ($user_id,$rupee) ";
            //    $result12=$conn->query($sqlinsert);

            $sqlu = "UPDATE balance set  balance = balance+$rupee  WHERE user_id = $user_id ";
            $resultu = $conn->query($sqlu);
        }
        //  $user_id=$_SESSION['id'];
        // $sqlinsert="INSERT into balance( user_id,balance) VALUE ($user_id,$rupee) ";
        // $result12=$conn->query($sqlinsert);
        ?>
                         <script type="text/javascript">
                                   alert("sucessfully added to your account");
                                      //window.location('view_profile.php?id'=$user_id);
                        </script>
                 <?php

    } else {

        ?>

                   </div>

                     <script type="text/javascript">
                     alert("please enter valid  cupon number");
                     </script>
                  <?php
}
}
?>

          <?php
$user_id = $_SESSION['id'];
$sqlb = " SELECT * from balance where user_id = $user_id ";
$resultb = $conn->query($sqlb);
$rowb = $resultb->fetch_assoc();
$balance = $rowb['balance'];
?>


    <h4 id="balance"><i style="color:green;font-size:25px" class="fa fa-money" aria-hidden="true"></i> :<?php echo $balance . "0"; ?></h4>
    <div align="center" style="margin-top:80px;border:px solid black;padding-bottom:10px" class=" col-md-8 container">

      <h1 style="margin-top:100px">enter your cupon id </h1> <br box-shadow: 10px 10px darkgreen;>
      <form   class="" action="" method="post">
        <input style=" width:30%" class="form-control" type="text" name="payment" value="" placeholder="enter your unique cupon number" required> <br>
        <button style="" class="btn btn-primary" type="submit" name="pay">payment</button>
      </form>


    </div>


       <!-- <a style="font-size:30px" href="purchaseCupon.php">buy cupon click here</a> -->


  </body>
  <?php

?>
   <script type="text/javascript">


   </script>


</html>
