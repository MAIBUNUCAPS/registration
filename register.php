<?php
require_once
if (isset =$_POST['register']){
    $name = $_POST['name'];
    $email = $_POST[email];
    $password = password_hash($_POST['password'],
password_default);
$query = "INSERT INTO users (name,email,passwod) values ('$name','$email','$password')";
$conn->query($query);

  echo "Regidtration was successful";
}