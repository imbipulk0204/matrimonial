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


<?php
// payment

if (isset($_POST['payment_id'])) {
    $id = $_SESSION['id'];
    $paid_id = $_POST['payment_id'];

    $sqlcheck = "SELECT * FROM balance WHERE user_id=$id ";
    $resultc = $conn->query($sqlcheck);
    $rowc = $resultc->fetch_assoc();
  //  echo $rowc['balance'];
            $balance= $rowc['balance'];
    if ($rowc['balance'] !=0) {
        
        
        $sqlpd = " INSERT INTO paid_members (user_id,paid_id ) VALUES ($id,$paid_id) ";
        $resultpd = $conn->query($sqlpd);

        $sqlupdate=" UPDATE balance set balance=$balance-100 WHERE user_id=$id ";
        $resultup=$conn->query($sqlupdate);

        ?>
                  <script>
                       alert("transaction successful");
                    window.location="userhome.php";
                  </script> 
                 
        <?php  

    } else {
        ?>
        <script>
             alert("your balance is low please purchase cupon to continue");
           window.location="payment.php";
        </script>
       
<?php
    }
} else {

}

?>

