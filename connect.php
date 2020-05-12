<?php

// Constants
$TABLE_NAME = "users";
// Columns names
$COLUMN_NAME = "name";
$COLUMN_EMAIL = "email";
$COLUMN_PASSWORD = "password";
$COLUMN_AGE = "age";
$COLUMN_OCCUPATION = "occupation";
$COLUMN_TIME = "time";

define('host', '127.0.0.1');
define('port_msyql', '3308'); // Port for mySql server
define('port_maria', '3307'); // Port for mySql MariaDb server
define('user', 'root');
define('pass', '');
define('db', 'android');

// Connect to MySql database
$mysqli = new mysqli(host.":".port_msyql, user, pass, db) ;
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
			return;
}

?>