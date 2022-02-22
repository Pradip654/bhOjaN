<?php

echo '

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../image/logo.png">
    <link rel="stylesheet" href="../css/main.css">

</head>


<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-2 fixed-top">

        <div class="container">
            <a href="#" class="navbar-brand">
                <span class="text-primary h1 logo">
                    bhOjaN
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlink">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <div class="container collapse navbar-collapse justify-content-center" id="navlink">

                <div class="container">

                    <ul class="navbar-nav">

                        <li class="nav-item px-3">
                            <a href="#" class="nav-link disabled">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a href="#" class="nav-link disabled">
                                <i class="bi bi-list-task"> </i> Service
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a href="#" class="nav-link disabled">
                                <i class="bi bi-shop-window"> </i> Order
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#" class="nav-link disabled">
                                <i class="bi bi-telephone"></i> Contact
                            </a>
                        </li>


                    </ul>

                </div>

            </div>

        </div>

    </div>
    <script src="./js/bootstrap.min.js">
    </script>

</body>';
