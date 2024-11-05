<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <title>Fragnance | KB's Favorite Fragnances & Care Products</title>

    <style>
        .montserrat {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
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

        /* CArouser CSS */
        /* Default height for larger screens */
        .carousel-image {
            height: 550px;
        }

        /* Media query for mobile view */
        @media (max-width: 768px) {
            .carousel-image {
                height: auto;
                /* Makes height responsive on smaller screens */
            }
        }


        /* Card CSS */

        .card-img {
            transition: transform 0.3s ease;
            /* Adjust 0.3s for the hover effect speed */
        }

        .card-img:hover {
            transform: scale(1.05);
            /* Slightly increase the scale of the image */
        }

        /* Trading CSS */

        .trending {
            background-color: #ff6347;
            color: white;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 0px;
        }

        .card-price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .add-to-cart {
            background-color: #333;
            color: white;
            border: none;
            font-weight: bold;
        }

        .add-to-cart:hover {
            background-color: #555;
        }

        .stars {
            color: #ffa500;
            margin-right: 5px;
        }


        .card-title {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-nav ">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="70" height="70">
            </a>

            <!-- toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-lg-0 montserrat ">
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-5 mx-1 navStyle "
                            href="<?php echo base_url() . 'User/UserHome'; ?>">
                            Luxury
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Bookings'; ?>">
                            Natural
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Bookings'; ?>">
                            Science
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Bookings'; ?>">
                            Wellness
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 text-dark fs-5 navStyle"
                            href="<?php echo base_url() . 'User/Bookings'; ?>">
                            Offers
                        </a>
                    </li>
                </ul>

                <!-- search icon -->
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

                <!-- user icon -->
                <div class="btn-group dropleft">
                    <button type="button" class="btn border-0 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-user fa-xl text-dark"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="<?php echo base_url() . 'User/UserProfile'; ?>">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>

                <!-- cart icon -->
                <div class="btn-group dropleft">
                    <button type="button" class="btn border-0 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping fa-xl text-dark"></i>
                    </button>
                </div>

            </div>
        </div>
    </nav>
    <!-- navbar section -->


    <!-- Carousel Code start -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/images/caro1.jpeg') ?>" class="carousel-image d-block w-100"
                    alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/images/caro2.jpeg') ?>" class="carousel-image d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/images/caro3.jpeg') ?>" class="carousel-image d-block w-100"
                    alt="Slide 3">
            </div>
        </div>
    </div>

    <!-- CArousel code end  -->

    <!-- Cards code 4 cards start -->

    <div class="container my-5">
        <h2 class="text-center montserrat fw-bold mb-4">Shop by Brands</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100" style="border-radius: 15px;">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url('assets/images/Luxury/Luxury_1-min.jpg') ?>" class="card-img"
                            alt="Card 1 Image" style="border-radius: 15px;">
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100" style="border-radius: 15px;">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url('assets/images/Wellness/Wellness.jpg') ?>" class="card-img"
                            alt="Card 2 Image" style="border-radius: 15px;">
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100" style="border-radius: 15px;">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url('assets/images/science/Science_3.jpg') ?>" class="card-img"
                            alt="Card 3 Image" style="border-radius: 15px;">
                    </a>

                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100" style="border-radius: 15px;">
                    <a href="#" target="_blank">
                        <img src="<?php echo base_url('assets/images/natural/natural.jpg') ?>" class="card-img"
                            alt="Card 4 Image" style="border-radius: 15px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- cards code 4 cards end -->

    <div class="container my-5">
        <h2 class="text-center  montserrat fw-bold mb-4">Trending Products</h2>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center">
                    <div class="trending">🔥 TRENDING</div>
                    <img src="<?php echo base_url() . 'assets/images/tranding/OGLuxuryPerfumeSmokey.jpg' ?>"
                        class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">OG BEAUTY Luxury Gallant Eau De Parfum 50ml</h5>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <span class="stars">★ 4.8</span>
                            <span>(60)</span>
                        </div>
                        <p class="card-text">Long lasting | Alluring | Fragrance</p>
                        <p class="card-price">₹ 299</p>
                        <button class="btn add-to-cart w-100">ADD TO CART</button>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center pt-4">
                    <img src="<?php echo base_url() . 'assets/images/tranding/OGLuxuryPerfumeSmokey.jpg' ?>"
                        class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">OG BEAUTY Luxury Gallant Eau De Parfum 50ml</h5>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <span class="stars">★ 4.8</span>
                            <span>(60)</span>
                        </div>
                        <p class="card-text">Long lasting | Alluring | Fragrance</p>
                        <p class="card-price">₹ 299</p>
                        <button class="btn add-to-cart w-100">ADD TO CART</button>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center">
                    <div class="trending">🔥 TRENDING</div>
                    <img src="<?php echo base_url() . 'assets/images/tranding/OGLuxuryPerfumeSmokey.jpg' ?>"
                        class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">OG BEAUTY Luxury Gallant Eau De Parfum 50ml</h5>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <span class="stars">★ 4.8</span>
                            <span>(60)</span>
                        </div>
                        <p class="card-text">Long lasting | Alluring | Fragrance</p>
                        <p class="card-price">₹ 299</p>
                        <button class="btn add-to-cart w-100">ADD TO CART</button>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center">
                    <div class="trending">🔥 TRENDING</div>
                    <img src="<?php echo base_url() . 'assets/images/tranding/OGLuxuryPerfumeSmokey.jpg' ?>"
                        class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">OG BEAUTY Luxury Gallant Eau De Parfum 50ml</h5>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <span class="stars">★ 4.8</span>
                            <span>(60)</span>
                        </div>
                        <p class="card-text">Long lasting | Alluring | Fragrance</p>
                        <p class="card-price">₹ 299</p>
                        <button class="btn add-to-cart w-100">ADD TO CART</button>
                    </div>
                </div>
            </div>

            <!-- Repeat the above card structure for additional cards -->
        </div>
    </div>


    <div class="container mt-5 d-flex montserrat justify-content-center align-items-center">
        <div class="row ">
            <h5 class="card-title mb-4 fs-2 ">Fragrance Code</h5>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-0" style="width: 170px;">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url() . 'assets/images/code/Group_small.webp' ?>" alt="">
                        <p class="card-text fw-bold mt-3">Cruelty Free</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-0" style="width: 170px;">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url() . 'assets/images/code/Frame_small.webp' ?>" alt="">
                        <p class="card-text fw-bold mt-3">Vegan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-0" style="width: 170px;">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url() . 'assets/images/code/Frame_1_small.webp' ?>" alt="">
                        <p class="card-text fw-bold mt-3">Pure Ingredients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>









    
    <!-- Carousel Animation -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.querySelector("#carouselExample");

            // Animate each slide when it becomes active
            carousel.addEventListener("slide.bs.carousel", (event) => {
                const activeSlide = event.relatedTarget.querySelector("img");

                // Set initial properties for animation
                gsap.set(activeSlide, { opacity: 0, scale: 0.9 });

                // Apply animation: fade-in with a slight zoom
                gsap.to(activeSlide, {
                    opacity: 1,
                    scale: 1,
                    duration: 1.2,
                    ease: "power2.out",
                });
            });
        });

    </script>



</body>

</html>