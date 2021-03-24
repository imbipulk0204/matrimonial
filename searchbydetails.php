<?php include_once "includes/basic_includes.php";?>
<?php include_once "functions.php";?>
<?php require_once "includes/dbconn.php";?>

<?php
// $value = $_SESSION[$row3];
?>
<?php
if (isloggedin()) {
    //do nothing stay here
} else {
    header("location:login.php");
}
?>
<?php

$user_id = $_SESSION['id'];

// $sql = "";

if (isset($_POST['search'])) {
          
    
    $agemin = $_POST['agemin'];
    $status=$_POST['status'];
    $country=$_POST['country'];
    $agemax=$_POST['agemax'];
    $religion=$_POST['religion'];
    $state=$_POST['state'];
    $mothertounge=$_POST['mothertounge'];
    $gender=$_POST['gender'];

    
    //echo $name;
    $sqln = " SELECT * FROM user_all_details WHERE maritialstatus='$status' and gender=$gender and religion='$religion' 
    and state='$state' and country='$country' and mothertounge='$mothertounge' and age between $agemin and $agemax
    ";
    $resultn = $conn->query($sqln);
    $rown = $resultn->fetch_assoc();
    
   
       
        ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search view</title>
    
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!-- w3 school  -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- w3 school  -->
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--font-Awesome-->
  <style>
  .card{
      margin-left: 100px;
      margin-top:100px;
  }


  </style>
</head>
<?php include "includes/navigation.php"?>
<body>
               <?php
                if ($rown > 0) {

        while ($rown=$resultn->fetch_assoc()) {

            $name1 = $rown['name'];
           echo  $idd = $rown['user_id'];
            $gender = $rown['gender'];
            $sqla = "SELECT * FROM user_all_details Where user_id=$idd ";
            $resulta = $conn->query($sqla);
            $rowa = $resulta->fetch_assoc();
            $status = $rowa['maritialstatus'];

            $pic1 = "";
            // $pic2 = "";

            //getting image filenames from db
            $sql3 = "SELECT * FROM photos WHERE cust_id = $idd";
            $result3 = $conn->query($sql3);
            $row3 = $result3->fetch_assoc();
            $pic1 = $row3['pic1'];
           
    
            ?>
                <div class="card col-md-5 " style="width:18rem;border:px solid blue;margin-left:60px;">
                           <p data-thumb="profile/<?php echo $user_id; ?>/<?php echo $pic1; ?>"> </p>
							<img style="margin-left:0px;padding-left:0px" width="250" height="180" src="profile/<?php echo $idd; ?>/<?php echo $pic1; ?>"/>
                <!-- <img style="padding-left:0px" src="image222/1.jpg" class="card-img-top img-thumbnail" alt="..."width="250" height="150"> -->
                <div class="card-body" >
                    <h5 class="card-title"><?php echo $name1; ?> </h5>
                    <p class="card-text"> <?php
if ($gender == 1) {
                echo "male";
            } else {
                echo "female";
            }
            echo " <br>" . $status;?></p>

                     <form action="user2.php" method="post">
                         <input type="number" name="jo_idbheja" value="<?php echo $idd; ?>" hidden>
                    <button class="btn btn-primary" type="submit" name="jo_id" >view profile</button>
                     </form>
                </div>
                </div>
         <?php

        }} else {
        ?>
           <script>
              alert("no user found");
              window.location="search.php";
             </script>

          <?php
}

} else {

    echo "no user found";
}

?>
       <?php //include "footername.php";?>
</body>
</html>