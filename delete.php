<?php
include "connection.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
     "user id=".$id;
    $sql ="DELETE FROM jamb_detail WHERE id=$id";
    if($connection->query($sql)===True){
        header("Location:records.php");
    }
    else{
    echo "Unable to delete records";
    }
}