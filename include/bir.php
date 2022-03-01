<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password_form = md5($_POST['password']);

    include_once('../include/database.php');

    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {

        $sql = "INSERT INTO `users`(`id`, `name`, `phone`, `email`, `password`) VALUES ('','$name ','$phone ','$email','$password_form')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo ("Data Inserted");
            header("location:../pages/login.php");
        } else {

            echo ("Failed TO Insert Data" . mysqli_error($conn));
        }
    }
}
?>