<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);

    // Connecting to the Database
    include_once('../include/database.php');

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {

        $sql = "Select * from users where name='$name' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // var_dump($num);
        if ($num) {

            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $name;

            include_once('../index.php');
        ?>

        <?php
        } else {

            echo "<script> alert('Invalid Username Or Password');</script>";
        }
    }
}
