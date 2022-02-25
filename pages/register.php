<?php ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="../image/logo.png">
    <link rel="stylesheet" href="../css/main.css">


</head>

<body class="login">
    <?php
    include_once('../include/navbar.php');
    ?>

    <br>
    <br>
    <br>
    <br>


    <section class="p-3 text-center">
        <div class="container border border-info">
            <div class="container text-center p-3 lead">
                <form class="form-signin" method="post" action="../include/bir.php">
                    <h1 class="border border-info">
                        <span class="h1 text-primary rounded mb-3 fw-bold logo">bhOjaN</span>
                    </h1>
                    <br>
                    <label for="inputEmail" class="sr-only">User Name</label>
                    <input type="text" name="name" id="inputEmail" class="form-control mb-3" placeholder="user name" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control mb-3" placeholder="email address" required>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control mb-3" placeholder="password" minlength="4" required>
                    <label for="inputEmail" class="sr-only">Confirm Password</label>
                    <input type="password" name="repassword" id="inputEmail" class="form-control mb-3" placeholder="confirm password" required>
                    <button class="btn btn-lg btn-outline-danger btn-block" name="submit" type="submit">Sign Up</button>
                    <button class="btn btn-lg btn-outline-danger btn-block" name="clear" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </section>
 
    <?php
    include_once('../include/contact.php')
    ?>

    <section class="p-1 bg-warning">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-dark">
                <?php $year = date("F");
                $month = date("jS");
                $day = date("Y");
                echo $year . " " . $month . " " . $day;
                ?>
                <?php $year = date("l");
                echo $year;
                ?>
        </div>
    </section>

    <?php
    include_once('../include/footer.php')
    ?>
</body>

</html>