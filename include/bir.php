<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $passwordR = $_POST['repassword'];
    $passwordH = password_hash($password, PASSWORD_DEFAULT);


    include_once('./function.php');

    if (matchPassword($password, $passwordR) !== false) {
        include_once('./database.php');

        $sql = "INSERT INTO users value ('" . $name . "', '" . $password . "', '" . $email . "','". $phone ."');";
        $sqlCheck = "SELECT emailId FROM users WHERE email = '" . $email . "';";
        $chaeckEmail = mysqli_query($conn, $sqlCheck);
        if ($chaeckEmail) {
            header('location: ../pages/register.php?email_already_exists');
        }
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
            header('location: ../pages/login.php?user_created_:)');
        }

        mysqli_close($conn);
    } else {
        header('location: ../pages/register.php?error_message=password_not_matched');
        exit();
    }
} else {
    header('location: ../pages/register.php');
}