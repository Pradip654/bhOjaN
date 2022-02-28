<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    include_once('./database.php');
    $sql = "SELECT * FROM users WHERE name = '" . $name . "';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $hash = $row["password"];
            $password = password_verify($password, $hash);
            if ($row["name"] == $name && $passwordH == 1) {
                header('location: ../index.php');
                session_start();
                $_SESSION["name"] = $row["name"];
                $_SESSION["password"] = $row["password"];
            }
            else{
                header('location: ../pages/login.php?password_not_matched');
            }
        }
    } else {
        header('location: ../pages/login.php?user_not_matched');
    }

    mysqli_close($conn);
} else {
    header('location: ../pages/login.php');
}