<?php
header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

// Read values POST from client request
$name = $_POST["name"];
$email = $_POST["email"];
$password = sha1($_POST["password"]);
$age = $_POST["age"];
$occupation = $_POST["occupation"];
$time =  time ( ) ;

// Prepare the request
$req = $mysqli->prepare("INSERT INTO $TABLE_NAME($COLUMN_NAME ,$COLUMN_EMAIL,$COLUMN_PASSWORD ,$COLUMN_AGE ,$COLUMN_OCCUPATION)
VALUES (?,?,?,?,?)");

// bind parameters
$req->bind_param('sssss', $name, $email, $password, $age, $occupation);

// Execute the prepared request
$state = $req->execute();

// Check if request is not prepared successfully ,return
if(!$req) {
    $status["value"] = "0";
    $status["message"] = "Error preparing request: " . $mysqli->error ;
    echo json_encode($status);
	
    return;
}


// If inserting data failed
if(!$state) {
    $status["value"] = "0";
    $status["message"] = "Failed to insert data to database: " . $mysqli->error;
    echo json_encode($status);
	return;
}

// If inserting data success!!
    $status["value"] = "1";
    $status["message"] = "Entry added successfully";
    echo json_encode($status);
            
?>