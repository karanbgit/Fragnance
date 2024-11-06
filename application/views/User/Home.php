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

        /* Custom Styles to remove background color */
        .nav-pills .nav-link {
            background-color: transparent;
            /* Remove background color */
            color: #333;
            /* Default text color */
            border: 1px solid #ccc;
            /* Optional: add a light border */
        }

        .nav-pills .nav-link.active {
            background-color: transparent;
            /* Transparent background for active tab */
            color: #000;
            /* Change active text color if needed */
            font-weight: bold;
            /* Optional: make active tab bold */
            border-color: #000;
            /* Optional: darker border on active */
        }


    
    </style>
</head>

<body>

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>

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


    <!-- Trending Products Code  -->

    <div class="container montserrat my-5">
        <h2 class="text-center  fw-bold mb-4">Trending Products</h2>

        <div class="container mt-4">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border-0 fs-5" id="newly-launched-tab" data-bs-toggle="pill"
                        data-bs-target="#newly-launched" type="button" role="tab" aria-controls="newly-launched"
                        aria-selected="true">Newly Launched</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-0 fs-5" id="bestsellers-tab" data-bs-toggle="pill"
                        data-bs-target="#bestsellers" type="button" role="tab" aria-controls="bestsellers"
                        aria-selected="false">Bestsellers</button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="pills-tabContent">
                <div class="tab-pane fade show active" id="newly-launched" role="tabpanel"
                    aria-labelledby="newly-launched-tab">


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
                <div class="tab-pane fade" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">

                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 text-center">
                                <div class="trending">🔥 TRENDING</div>
                                <img src="<?php echo base_url() . 'assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg' ?>"
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
                                <img src="<?php echo base_url() . 'assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg' ?>"
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
                                <img src="<?php echo base_url() . 'assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg' ?>"
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
                                <img src="<?php echo base_url() . 'assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg' ?>"
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
            </div>
        </div>


    </div>


    <!-- Fragrance Code -->

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


    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

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