<?php
include_once '../../../../includes/dbconn.php';
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once "./lib/config_paytm.php";
require_once "./lib/encdec_paytm.php";

$today = date('d-m-Y');
$next_date = date('d-m-Y', strtotime($today . ' + 0 days'));
echo $next_date;

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

extract($paramList);
//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if ($isValidChecksum == "TRUE") {
    // echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
    if ($_POST["STATUS"] == "TXN_SUCCESS") {

        if ($TXNAMOUNT == 500) {
            echo $id = $_SESSION['id'];
            echo "one month member <br>";
            $today = date('Y-m-d');
            // $expiry_date = date('Y-m-d', strtotime($today . ' + 31 days'));

            // echo $expiry_date."<br>";

            $sql = "INSERT INTO premium_members(user_id,issue_date,duration) VALUES ($id,CURDATE(),1) ";
            $result = $conn->query($sql);

            header("Location:../../../../view_profile.php?id");

        }
        if ($TXNAMOUNT == 800) {

            $id = $_SESSION['id'];
            // echo "one month member";
            // $today = date('d-m-Y');
            // $expiry_date = date('d-m-Y', strtotime($today . ' + 61 days'));

            $sql = "INSERT INTO premium_members(user_id,issue_date,duration) VALUES ($id,CURDATE(),2) ";
            $result = $conn->query($sql);

            header("Location:../../../../view_profile.php?id");
        }
        if ($TXNAMOUNT == 1000) {

            $id = $_SESSION['id'];
            // echo "one month member";
            // $today = date('d-m-Y');
            // $expiry_date = date('d-m-Y', strtotime($today . ' + 91 days'));
            // echo $expiry_date;
            $sql = "INSERT INTO premium_members(user_id,issue_date,duration) VALUES ($id,CURDATE(),3) ";
            $result = $conn->query($sql);

            header("Location:../../../../view_profile.php?id");
        }

        // $sql = "SELECT * from cupons where rupees = $TXNAMOUNT AND status = 0 ";
        // $result=$conn->query($sql);
        // $row=$result->fetch_assoc();
        //  $cupon=$row['cupons'];

        //$_SESSION["cupon_id"] =  $row["cupons"];

        //header('Location:../../../userCupons.php');
        // echo "<b>Transaction status is success</b>" . "<br/>";
        // echo header("Location:givecupon.php");

//Process your transaction here as success transaction.
        //Verify amount & order id received from Payment gateway with your application's order id and amount.
    } else {
        echo "<b>Transaction status is failure</b>" . "<br/>";

        // header("Location:../purchaseCupon.php");

    }

    // if (isset($_POST) && count($_POST) > 0) {
    //     foreach ($_POST as $paramName => $paramValue) {
    //         echo "<br/>" . $paramName . " = " . $paramValue;
    //     }
    // }

} else {
    echo "<b>Checksum mismatched.</b>";
    //Process transaction as suspicious.
}
