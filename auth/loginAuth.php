<?php
include('../connection/config.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn,$query);
    $store = mysqli_num_rows($result);
    $pass = mysqli_fetch_assoc($result);

    if ($password == $pass['password']) {
        if ($store == 1) {

            // session_start();
            // $_SESSION['admin'] = $pass['id'];
            // header('location:index.php');
        } else {
            echo "user not found";
        }
    } else {
        echo "password not matched";
    }
   
   
}