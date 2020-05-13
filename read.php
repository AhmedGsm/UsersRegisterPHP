<?php
header("Content-Type: application/json; charset=UTF-8");

// Connect to database
require_once('connect.php');

$data = array();
// Prepare the query to read data
$response = $mysqli -> prepare("SELECT name,email FROM $TABLE_NAME WHERE _id >= ?");

/* bind parameters for markers */
$id = 0;
$response->bind_param("i", $id);
/* bind result variables */
$response->bind_result($name, $email);
// Execute the query
$response ->execute();

// If response failed, return
if(!$response) {
    $status["value"] = "0";
    $status["message"] = "Failed to read database " . $mysqli-> error ;
    echo json_encode($status);
	return;
}

// Read Data from the cursor
while ($row = $response-> fetch()) {
    array_push($data,     array("email" => $email,
	"name" => $name) );
}

if(sizeof($data) == 0 ) {
	
    $status["value"] = "0";
    $status["message"] = "No user registered on server " . $mysqli-> error ;
    array_push($data,     $status );
    echo json_encode($data);
	return;
}

// Send data to client
echo json_encode($data);


?>