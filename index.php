<?php
// 3.1.9 - Check session variables
//   Support VirtualHost IDNA ServerName
// echo 'Hello new PHP!<br>';
$TABLE_NAME = "users";

$COLUMN_NAME= "name";
$COLUMN_ADDRESS= "address";
$COLUMN_AGE= "age";
$COLUMN_TELEPHONE= "telephone";

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

// Insert new line in database
$name = "Ahmed";
$telephone = "0552 09 79 64";
$address = "Beni Hamad, Mechedallah, BOUIRA, Algeria";
$age = 37;


?>