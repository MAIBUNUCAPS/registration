<?php
$srvername = "localhost";
$username = "root";
$password = "";
$database = "jamb";

// create a connection
$conn = new mysqli ($srvername,$username,$password,$database);
// check the connection

 if ($conn->connect_error){
    echo "connection failed";
 }   else{
       
    }

//include connect.php;

$name = $_POST["name"];
$phonenumber =$_POST["phonenumber"];
$state =$_POST["state"];
$course =$_POST["course"];
$institution = $_POST["institution"];

$sql = "INSERT INTO jamb_detail(username,phonenumber,userstate,course,institution) VALUES('$name','$phonenumber','$state','$course','$institution')";

#$sql = "INSERT INTO jamb_table(username,userstate) VALUES ($name,$state)";

if($conn->query($sql) === true ){
    header("Location: records.php");
    exit;
    // echo "New record inserted";
}
else{

    echo "Error .".$sql."<br>".$conn->error;
}
