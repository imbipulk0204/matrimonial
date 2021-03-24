<?php
$gotToken = $_GET['tokenName'];
$partnerid = $_GET['partneridName'];
include "../includes/dbconn.php";
$sql = "select * from users where api_token = '$gotToken'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$selfid = $row['id'];
$mymsg = $_GET['messageBody'];
$sql = "insert into message (sender_id,receiver_id,body,time) value
                            ($selfid,$partnerid,'$mymsg',NOW())";
$conn->query($sql);
// echo $conn->error;
