<?php include_once "../includes/basic_includes.php";?>
<?php include_once "../functions.php";
include "../includes/dbconn.php";
?>
<?php
$id = $_SESSION['id'];
$sqlr = "select * from users where id=$id ";
$r = $conn->query($sqlr);
$row = $r->fetch_assoc();
$gender = $row['gender'];
$age = $row['dateofbirth'];
$name = $row['username'];

if (isset($_POST['about'])) {

    $id = $_SESSION['id'];

    $religion = $_POST['religion'];

    $state = $_POST['state'];
    $country = $_POST['country'];
    $maritialstatus = $_POST['maritialstatus'];
    $education = $_POST['education'];
    $bodytype = $_POST['bodytype'];
    $physicalstatus = $_POST['physicalstatus'];
    $mothertounge = $_POST['mothertounge'];
    $occupation = $_POST['occupation'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $motheroccupation = $_POST['motheroccupation'];
    $noofbros = $_POST['noofbros'];
    $noofsis = $_POST['noofsis'];
    $about = $_POST['about'];
    $annualincome = $_POST['income'];
    $diet = $_POST['diet'];
    $color = $_POST['color'];
    $caste = $_POST['caste'];

    $sqli = "INSERT INTO  user_all_details (user_id,name,gender,age,height,religion,caste,state,country,maritialstatus,education,bodytype,physicalstatus,mothertounge,color,weight,diet,occupation,annualincome,fatheroccupation,motheroccupation,noofbros,noofsis,about,profilecreationdate) VALUES($id,'$name',$gender,$age,$height,'$religion','$caste','$state','$country','$maritialstatus','$education','$bodytype','$physicalstatus','$mothertounge','$color',$weight,'$diet','$occupation','$annualincome','$fatheroccupation','$motheroccupation',$noofbros,$noofsis,'$about',CURDATE()) ";
    $result = $conn->query($sqli);

    ?>

     <script>
     alert("profile created sucessfully");
     window.location="../userhome.php";
     </script>
<?php
} else {
    ?>
<script>
     alert("some problem occur please try again later!");
     window.location="../userhome.php";
     </script>
  <?php
}

?>