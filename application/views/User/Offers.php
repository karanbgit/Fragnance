<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/fevicon/favicon.png') ?>">

    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GSAP CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>

    <!-- Fonts CDN Link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Fragnance | Offer</title>
</head>

<body>

    <!-- Navbar Code Include  -->

    <!-- Navbar Section -->
    <style>
        .montserrat {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: normal;
            font-style: normal;
        }

        /* Navigation CSS */
        @media (min-width: 769px) {
            .nav-link:hover {
                transform: scale(1.1);
            }

            .navStyle {
                transition: color 0.3s, transform 0.3s;
            }
        }

        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 1030;
            background-color: white;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #000 !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #000;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Carousel CSS */
        .carousel-image {
            height: 550px;
        }

        @media (max-width: 768px) {
            .carousel-image {
                height: auto;
            }
        }
    </style>

    <style>
        .cart-icon {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 0.75rem;
            padding: 4px 6px;
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            .cart-badge {
                position: relative;
                top: -10px;
                right: -10px;
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-nav">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo base_url() . 'User/index'; ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="70" height="70">
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-lg-0 montserrat">
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 mx-1 navStyle"
                            href="<?php echo base_url() . 'User/Luxury'; ?>">
                            Luxury
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Natural'; ?>">
                            Natural
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Science'; ?>">
                            Science
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Wellness'; ?>">
                            Wellness
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Offers'; ?>">
                            Offers
                        </a>
                    </li>
                </ul>

                <!-- Search Icon -->
                <form class="d-flex me-2">
                    <div class="input-group">
                        <input class="form-control me-2 search-input" type="search" name="query" placeholder="Search"
                            aria-label="Search">
                        <a href="#" class="input-group-text border-0 text-decoration-none"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background-color: transparent;">
                            <i class="fa-solid fa-search"></i>
                        </a>
                    </div>
                </form>

                <!-- User Icon -->
                <div class="dropdown">
                    <button class="btn border-0 dropdown-toggle" type="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user fa-xl text-dark"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'User/login'; ?>">Login</a></li>
                    </ul>
                </div>

                <!-- Cart Icon -->
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'User/Cart'; ?>">
                            <div class="cart-icon">
                                <i class="fas fa-shopping-cart fa-lg"></i>
                                <span class="badge bg-danger cart-badge">0</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Offer Code Start  -->

    <div class="image-fluid">
        <a href=""><img src="<?php echo base_url('assets/images/offer.png') ?>"
                class="carousel-image image-fluid d-block w-100" alt="Slide 3"></a>
    </div>

    <!-- Offer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

</body>

</html>