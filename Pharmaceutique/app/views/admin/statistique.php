<!doctype html5>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="<?= URLROOT . '/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= URLROOT . '/css/boxicons.min.css'; ?>">
    <link rel="stylesheet" href="<?= URLROOT . '/css/style.css'; ?>">
    <!-- CSS only -->
    <link rel="icon" type="image/x-icon" href="<?= URLROOT . '/img/favicon.ico'; ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT . '/css/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT . '/css/statics.css' ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <title>PhaG</title>

</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">

        <div class="container">
            <a class="navbar-brand logo-text" href="#">PharG ;)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">



                    <li>
                        <div class="btn-group" id="logout">
                            <button type="button" class="btn btn-dark ">
                                <a style="color: white;" href="<?= URLROOT . '/produits/getproduits' ?>">Manage page</a>
                            </button>

                        </div>

                        <div class="btn-group" id="logout">
                            <button type="button" class="btn btn-dark ">
                                <a style="color: white;" href="<?= URLROOT . '/pages/logout' ?>">Log out</a>
                            </button>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <section id="home">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

                            <div class="col-md-4">
                                <div class="shadow-lg p-3 mb-5 bg-dark rounded">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-white">Total produits:</p>
                                                <h4 class="my-1 text-white"><?= $data['totalproduit']; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="shadow-lg p-3 mb-5 bg-dark rounded">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <p class="mb-0 text-white">Prix maximum</p>
                                                <h4 class="my-1 text-white"><?= $data['prixmax']; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-4">
                        <h4 class="logo-text">Lissome</h4>
                        <p>Praesent vulputate neque nec sem fermentum porttitor. Mauris eget dolor convallis, trista, dignissim sapien. Duis vel felis dictu</p>
                        <div class="social-icons">
                            <a href="#"><i class="bx bxl-facebook"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                            <a href="#"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 class="title-sm">Navigation</h5>
                        <div class="footer-links">
                            <a href="#">Services</a>
                            <a href="#">Our Work</a>
                            <a href="#">Team</a>
                            <a href="#">Blog</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 class="title-sm">More</h5>
                        <div class="footer-links">
                            <a href="#">FAQ's</a>
                            <a href="#">Privacy & Policy</a>
                            <a href="#">Liscences</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5 class="title-sm">Contact</h5>
                        <div class="footer-links">
                            <p class="mb">1649 Norman Street, Safi, 9001</p>
                            <p class="mb-">05-16-06-42</p>
                            <p class="mb">hello@yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between gy-3">
                    <div class="col-md-6">
                        <p class="mb-0">© Agency2023. All rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Created with ❤️ by MORO</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>