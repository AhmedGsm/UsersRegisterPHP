<?php
// This file just for testing delete enteries in database
require_once('connect.php');
// Delete table row
$response = $mysqli -> prepare("DELETE FROM $TABLE_NAME WHERE _id>?");
$id=30;
$response->bind_param("i",$id);
$response->execute();
?>
