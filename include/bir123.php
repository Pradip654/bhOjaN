<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if ($password == $repassword) 
{
    include_once('./database.php');

    $sql = "insert into users values('" . $name . "', '" . $password . "', '" . $email . "')";

    if (mysqli_query($conn, $sql)) 
    {
        header('location:../pages/login.php');
    }
} 
else 
{
    header('location: ../pages/register.php?PasswordDonotMatch');
}
