<?php
$gotToken = $_GET['tokenName'];
$partnerid = $_GET['partneridName'];
include "../includes/dbconn.php";
$sql = "select * from users where api_token = '$gotToken'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$selfid = $row['id'];
$sql = "select * from message where
                (sender_id = $selfid and receiver_id = $partnerid)
                or
                (sender_id = $partnerid and receiver_id = $selfid)
                ";
$result = $conn->query($sql);
$messages = [];
while ($row = $result->fetch_assoc()) {
    array_push($messages, $row);
}
echo json_encode($messages);
