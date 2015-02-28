<?php

// for localhost
$host = "localhost";
$username = "root";
$password ="";
$database ="messexpense";


// for server
// $host = "mysql.2freehosting.com";
// $username = "u449848200_mess";
// $password ="2246101626";
// $database ="u449848200_mess";

$db= new mysqli($host, $username, $password, $database);