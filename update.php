<?php
// This file just for testing delete enteries in database
require_once('connect.php');

// Update values
$updatedName = "updated";
$updatedEmail = "updatedEmail";
$updatedPassword = "updated";
$updatedAge = "updated";
$updatedOccupation = "updated";

$COLUMN_NAME = "name";
$COLUMN_EMAIL = "email";
$COLUMN_PASSWORD = "password";
$COLUMN_AGE = "age";
$COLUMN_OCCUPATION = "occupation";
$COLUMN_TIME = "time";

// Prepare the query to read data
$response = $mysqli -> prepare("UPDATE $TABLE_NAME SET email = ? ,password = ?  WHERE _id>?");
$_id = 21;
$response->bind_param("ssi", $updatedEmail,$updatedPassword,$_id );
$response->execute();
