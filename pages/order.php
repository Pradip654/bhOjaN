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
            Todays Menu
        </h1>
    </div>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="../image/choumin.jpg" class="d-block w-100" alt="choumin">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>

            <div class="carousel-item">
                <img src="../image/momo.jpg" class="d-block w-100" alt="momo">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>

            <div class="carousel-item">
                <img src="../image/biryani.jpg" class="d-block w-100" alt="biryani">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h5>Third slide label</h5>
                         <p>Some representative placeholder content for the third slide.</p> -->
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row bg-danger text-center">
        <h1>
            Popular Items
        </h1>
        <br>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="../image/choumin.jpg" class="d-block w-100" alt="choumin">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../image/momo.jpg" class="d-block w-100" alt="momo">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../image/biryani.jpg" class="d-block w-100" alt="biryani">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h5>Third slide label</h5>
                         <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row bg-warning text-center">
        <h1>
            Other Items
        </h1>
        <br>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="../image/choumin.jpg" class="d-block w-100" alt="choumin">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../image/momo.jpg" class="d-block w-100" alt="momo">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../image/biryani.jpg" class="d-block w-100" alt="biryani">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h5>Third slide label</h5>
                         <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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