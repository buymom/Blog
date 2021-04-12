<?php
//connection to database
//define ('DB_HOST','localhost');
//define ('DB_USER','root');
//define ('DB_PASSWORD','');
//define ('DB_NAME','blogsdb');

//$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD);

$DB_HOST = getenv("MYSQL_SERVICE_HOST");
$DB_PORT = getenv("MYSQL_SERVICE_PORT");
$DB_USER = getenv("username");
$DB_PASSWORD = getenv("password");



?>

