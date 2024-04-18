<?php
include('../connection/config.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $store = mysqli_num_rows($result);
    if($store==0)
    {
        $insert = "INSERT INTO users(email,password)VALUES('$email','$password')";
        $result = mysqli_query($conn,$insert);
        if($result)
        {
            header('location:login.php');
        }
    }
    else{
        echo "email alreay registered";
    }
}