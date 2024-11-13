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

        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            position: relative;
            text-align: center;
            background-color: #fff;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .badge-trending {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff5c00;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .product-info h6 {
            margin-top: 15px;
            font-size: 1rem;
            font-weight: 600;
            color: #333;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #ff5c00;
        }

        .product-discount {
            text-decoration: line-through;
            color: #888;
            font-size: 1rem;
            margin-left: 10px;
        }

        .add-to-cart-btn {
            background-color: black;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #333;
            color: #ff5c00;
        }

        /* Nav pills csss  */

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
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/images/caro3.png') ?>" class="carousel-image d-block w-100"
                    alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/images/caro2.png') ?>" class="carousel-image d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item ">
                <img src="<?php echo base_url('assets/images/caro1.png') ?>" class="carousel-image d-block w-100"
                    alt="Slide 1">
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
                            alt="Card 2 Image" style="border-radius: 15px;">
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

                    <div class="row mt-5">
                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OGLuxuryPerfumeSmokey.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>


                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OGLuxuryPerfumeSmokey.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OGLuxuryPerfumeSmokey.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OGLuxuryPerfumeSmokey.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">

                    <div class="row mt-5">
                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>


                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-3 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/tranding/OG_Luxury_Pack_of_4_15ml_Elite_Aura_Listing_Image_1.jpg') ?>"
                                    alt="Gallant Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Gallant, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Fragrance Code -->

    <div class="container mt-5 d-flex montserrat justify-content-center align-items-center">
        <div class="row text-center">
            <h5 class="card-title mb-4 fs-2">Fragrance Code</h5>

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



    <!-- JavaScript to handle Add to Cart functionality -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
            const cartBadge = document.querySelector(".cart-badge");
            let cartItemCount = 0;

            addToCartButtons.forEach(button => {
                button.addEventListener("click", function () {
                    cartItemCount++;
                    cartBadge.textContent = cartItemCount; // Update cart item count
                    alert("Item added to cart!");
                });
            });
        });
    </script>

</body>

</html>