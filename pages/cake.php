<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oRdEr</title>
    <link rel="shortcut icon" href="../image/logo.png">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>

    <?php
    include_once('../include/navbar.php');
    ?>

    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid text-strong bg-secondary">
        <h1>
            <marquee behavior="alternate" scrollamount="12"> ORDER HERE</marquee>
        </h1>
    </div>

    <div class="row bg-warning text-center">
        <h1>
            Latest Cake
        </h1>
        <div class="container bg-white text-center">
            Amit
        </div>
    </div>

    <div class="row bg-danger text-center">
        <h1>
            Popular Cake
        </h1>
        <div class="container bg-white text-center">
            Amit
        </div>
    </div>

    <div class="row bg-warning text-center">
        <h1>
            Other Cakes
        </h1>
        <div class="container bg-white text-center">
            Amit
        </div>
    </div>
    <br>

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