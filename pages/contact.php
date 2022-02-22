<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coNtaCt</title>
    <link rel="shortcut icon" href="../image/logo.png">

</head>

<body>

    <?php
    include_once('../include/navbar.php');
    ?>

    <br>
    <br>

    <div class="container p-5">

        <?php
        include_once('../include/contact.php')
        ?>

        <section class="p-1 bg-warning">

            <div class="container text-dark text-center">

                <span class="h1 lead fw-bold text-dark">

                    <?php
                    echo "Today is " . date("Y/m/d");
                    echo "   " . date("l");
                    ?>

                </span>

            </div>

        </section>

    </div>

    <?php
    include_once('../include/footer.php')
    ?>

</body>

</html>