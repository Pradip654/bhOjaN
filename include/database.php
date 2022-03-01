<?php

$url = "localhost";
$user = "root";
$password = "";
$dbn = "bhojan";

$conn = mysqli_connect($url, $user, $password, $dbn);
if (!$conn) 
{
    die('Connection Failed!');
} 

else 
{
    echo ('Connection Successful!');
}
