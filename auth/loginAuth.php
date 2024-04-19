<?php
include('../connection/config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $store = mysqli_num_rows($result);
    $pass = mysqli_fetch_assoc($result);

    if ($password == $pass['password']) {
        session_start();
        // $_SESSION['admin'] = $pass['id'];
        //
        $_SESSION["isUserLogin"] = true;
        $_SESSION["name"] = $pass['name'];
        // echo $_SESSION["isUserLogin"] ? "hey" : "one";
        header('location:../html/index.php');
    } else {
        echo "user not found";
    }
} else {
    echo "password not matched";
}
