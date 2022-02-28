<?php

$url = "localhost";
$user = "root";
$pasword = "";
$dbn = "bhojan";

$conn = mysqli_connect($url, $user, $pasword, $dbn);
if (!$conn) 
{
    die('Connection Failed!');
} 

else 
{
    echo ('Connection Successful!');
}
