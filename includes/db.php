<?php

date_default_timezone_set("Asia/Dhaka");

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "abirvabnews";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);




if($connection->connect_error)
	echo "Connecion failed!".$connection->connect_error;
	
$query = "SET CHARACTER SET utf8";
$connection->query($query);
$query = "SET SESSION collation_connection ='utf8_general_ci'";
$connection->query($query);
$query = "SET NAMES utf8";
$connection->query($query);


?>
