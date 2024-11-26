<?php
require_once 'database.php';

if (isset($_POST['login'])){
    $email =$_POST['email'];
    $password =$_POST['password'];

     $query = "SELECT * FROM users WHERE email = '$email'";
     $result = $conn->query($query);
     if($result ->num_rows>0){
        $user = $result->fetch_assoc();
        if (password_verify($password,$user['password'])){
            echo "Login successful";
        }
        else{
            echo "Invalid password";
        }
    }
        
        else{
            echo "invalid email";
        }
     }
    
    ?>
    <form action ="" method ="post">
        <label>Email:</label>
        <input type ="email"name="email"><br><br>
        <label>password:</label>
        <input type="password"name="password"><br><br>
        <input type ="submit" name="login" value="Login">
</form>