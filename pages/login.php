<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../image/logo.png">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body class="login">

    <!-- NAVBAR -->
    <?php
    include_once('../include/navbar.php');
    ?>
    <!-- END OF NAVBAR -->

    <br>
    <br>
    <br>
    <br>
    <!-- FORM PART -->
<section class="p-3 text-center">
        <div class="container border border-info">
            <div class="container text-center p-3 lead">
                <form class="form-signin" method="post" action="../include/bil.php">
                    <h1 class="border border-info">
                        <span class="h1 text-primary rounded mb-3 fw-bold logo">bhOjaN</span>
                    </h1>
                    <br>
                    <label for="inputEmail" class="sr-only">User Name</label>
                    <input type="text" name="name" id="inputname" class="form-control mb-3 text-danger" placeholder="user name" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control mb-3 text-danger" name="password" placeholder="Password" minlength="4" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" checked> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-outline-danger btn-block" type="submit" name="submit">Sign in</button>
                    <button class="btn btn-lg btn-outline-danger btn-block" type="reset" name="clear">Reset</button><br> <br>
                    <a href="./register.php" class="nav-link">
                        <input class="btn btn-lg btn-outline-primary btn-block" type="" name="DontHaveAnAccount" value="Don't have an account?">
                    </a>
                </form>
            </div>
        </div>
</section>
    <!-- END OF FORM PART -->

    <!-- CONTACT PART -->
    <?php
    include_once('../include/contact.php')
    ?>
    <!-- END OF CONTACT PART -->

    <!-- DATE PAET -->
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
    <!-- END OF DATE PART -->

    <!-- FOOOTER PART -->

    <!-- END OF FOOTER PART -->

</body>

</html>