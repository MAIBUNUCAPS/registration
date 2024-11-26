<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "jamb";

$connection = new mysqli ($servername,$username, $password,$dbname);

if ($connection->connect_error){
    echo "enable to connect to database";

} else{
    // echo "connection was successfull";
}