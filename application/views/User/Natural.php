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

    <title>Fragnance | Natural</title>

    <style>
        /* Custom Styles for Filter Section */
        .filter-section {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }

        .filter-title {
            font-weight: bold;
            color: #333;
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
        }

        .filter-category {
            border-top: 1px solid #ddd;
            padding: 15px 0;
        }

        .filter-category:first-of-type {
            border-top: none;
        }

        .filter-category h6 {
            font-size: 1rem;
            color: #444;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            text-align: center;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: #555;
            cursor: pointer;
        }

        .price-range {
            color: #333;
            font-weight: bold;
        }

        .filter-divider {
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        .filter-section input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            background: #ddd;
            outline: none;
            opacity: 0.8;
            transition: opacity 0.2s;
        }

        .filter-section input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background-color: #ff5c00;
            border-radius: 50%;
            cursor: pointer;
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

        /* Remove background color from nav links */
        .nav-pills .nav-link {
            background-color: transparent;
            color: black;
        }

        /* Optional: To remove background color only on the active tab */
        .nav-pills .nav-link.active {
            background-color: transparent;
            color: black;
            font-weight: bold;
            margin-bottom: 10px;
            border-left: 3px solid black;
        }
    </style>
</head>

<body style="background-color: #f5f5f5;">

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>


    <!-- Background Image -->
    <div class="image-fluid">
        <img src="<?php echo base_url('assets/images/Natural/bg image.jpeg') ?>"
            class="carousel-image image-fluid d-block w-100" alt="Slide 3">
    </div>



    <!-- Luxury Code Start  -->
    <div class="container my-5">
        <div class="row">
            <!-- Sidebar Filter Section -->
            <div class="col-12 col-md-3 mb-4 mt-3">
                <div class="filter-title">Filter</div>
                <hr>
                <div class="filter-section">

                    <!-- Availability Filter -->
                    <div class="filter-category">
                        <h6>Availability</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="inStock">
                            <label class="form-check-label" style="font-size: 16px;" for="inStock">In stock (28)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="outOfStock">
                            <label class="form-check-label" style="font-size: 16px;" for="outOfStock">Out of stock
                                (02)</label>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="filter-divider"></div>

                    <!-- Price Filter -->
                    <div class="filter-category">
                        <h6>Price</h6>
                        <input type="range" class="form-range" min="0" max="999">
                        <div class="d-flex justify-content-between price-range">
                            <span>₹0</span>
                            <span>₹999</span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="filter-divider"></div>

                    <!-- Product Type Filter -->
                    <div class="filter-category">
                        <h6>Product Type</h6>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="bodylotion">
                            <label class="form-check-label" style="font-size: 16px;" for="bodylotion">Body Lotion
                                (11)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="bodyWash">
                            <label class="form-check-label" style="font-size: 16px;" for="bodyWash">Body Wash
                                (03)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="combo">
                            <label class="form-check-label" style="font-size: 16px;" for="combo">Combo (02)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="conditioner">
                            <label class="form-check-label" style="font-size: 16px;" for="conditioner">Conditioner
                                (01)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="faceCream">
                            <label class="form-check-label" style="font-size: 16px;" for="faceCream">Face Cream
                                (07)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="faceMask">
                            <label class="form-check-label" style="font-size: 16px;" for="faceMask">Face Mask
                                (05)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="faceToner">
                            <label class="form-check-label" style="font-size: 16px;" for="faceToner">Face Toner
                                (03)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="faceWash">
                            <label class="form-check-label" style="font-size: 16px;" for="faceWash">Face Wash
                                (01)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="foamingFaceWash">
                            <label class="form-check-label" style="font-size: 16px;" for="foamingFaceWash">Foaming Face
                                Wash (15)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="hairMask">
                            <label class="form-check-label" style="font-size: 16px;" for="hairMask">Hair Mask
                                (02)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="hairSerum">
                            <label class="form-check-label" style="font-size: 16px;" for="hairSerum">Hair Serum
                                (08)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="handCream">
                            <label class="form-check-label" style="font-size: 16px;" for="handCream">Hand Cream
                                (05)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="scrub">
                            <label class="form-check-label" style="font-size: 16px;" for="scrub">Scrub (08)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="shampoo">
                            <label class="form-check-label" style="font-size: 16px;" for="shampoo">Shampoo (02)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="showerGel">
                            <label class="form-check-label" style="font-size: 16px;" for="showerGel">Shower Gel
                                (07)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rosemaryWaterSpray">
                            <label class="form-check-label" style="font-size: 16px;" for="rosemaryWaterSpray">Rosemary
                                Water Spray (01)</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid Section -->
            <div class="col-12 col-md-9 ">
                <div class="row mb-5">
                    <div class="row mt-5">
                        <!-- Product Card 1 -->
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/natural/natural.jpeg') ?>"
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

                        <!-- Product Card 2 -->
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="product-card">
                                <img src="<?php echo base_url('assets/images/natural/natural.jpeg') ?>"
                                    alt="Shadow Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Shadow, 50 Ml</h6>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="product-price">₹349</span>
                                        <span class="product-discount">₹399</span>
                                    </div>
                                    <button class="btn add-to-cart-btn">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="product-card">
                                <span class="badge-trending">TRENDING</span>
                                <img src="<?php echo base_url('assets/images/natural/natural.jpeg') ?>"
                                    alt="Woody Perfume">
                                <div class="product-info">
                                    <h6>OG BEAUTY Luxury Eau De Parfum Woody, 50 Ml</h6>
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


    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>