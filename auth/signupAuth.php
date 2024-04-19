<?php
include('../connection/config.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $store = mysqli_num_rows($result);
    if($store==0)
    {
        $insert = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password')";
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