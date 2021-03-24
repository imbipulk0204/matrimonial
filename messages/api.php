<?php
include '../includes/dbconn.php';
$myToken = $_GET["myToken"];
// find the user id of the user having this token
$partnerid = $_GET["partnerid"];
