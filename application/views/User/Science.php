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

    <title>Fragnance | Science</title>

    <style>
        .filter-section {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            border: 1px solid #dee2e6;
        }

        .filter-title {
            font-weight: 600;
            font-size: 16px;
            color: #495057;
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 14px;
        }

        .price-range-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .price-input {
            width: 70px;
            text-align: center;
            font-size: 14px;
        }

        .range-slider {
            position: relative;
            width: 100%;
        }

        .range-slider input[type="range"] {
            position: absolute;
            width: 100%;
            pointer-events: none;
            -webkit-appearance: none;
            appearance: none;
        }

        .range-slider input[type="range"]::-webkit-slider-thumb {
            pointer-events: all;
            width: 20px;
            height: 20px;
            -webkit-appearance: none;
            appearance: none;
            background-color: #007bff;
            border-radius: 50%;
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
        <img src="<?php echo base_url('assets/images/science/bg image.jpeg') ?>"
            class="carousel-image image-fluid d-block w-100" alt="Slide 3">
    </div>



    <!-- Science Code Start  -->
    <div class="container my-5">
        <div class="row">
            <!-- Sidebar Filter Section -->
            <div class="col-12 col-md-3 mb-4 mt-3">
                <div class="filter-title text-center fs-3">Filter</div>
                <hr>
                <!-- Availability Filter -->
                <div class="filter-section">
                    <div class="filter-title">Availability</div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inStock">
                        <label class="form-check-label" for="inStock">In stock (08)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="outOfStock">
                        <label class="form-check-label" for="outOfStock">Out of stock (02)</label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="filter-section">
                    <div class="filter-title">Price</div>
                    <div class="price-range-container">
                        <span class="price-label">From ₹</span>
                        <input type="number" class="form-control price-input" value="0" min="0" max="999"
                            id="priceFrom">
                        <span class="price-label">To ₹</span>
                        <input type="number" class="form-control price-input" value="999" min="0" max="999"
                            id="priceTo">
                    </div>
                    <div class="range-slider py-4">
                        <input type="range" class="form-range d-none" min="0" max="999" value="0" id="minRange">
                        <input type="range" class="form-range" min="0" max="999" value="999" id="maxRange" >
                    </div>
                </div>

                <!-- Product Type Filter -->
                <div class="filter-section">
                    <div class="filter-title">Product Type</div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="combo">
                        <label class="form-check-label" for="combo">Combo (01)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wellness">
                        <label class="form-check-label" for="wellness">Wellness (06)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="easySleepTablets">
                        <label class="form-check-label" for="easySleepTablets">Easy Sleep Tablets (01)</label>
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
                                <img src="<?php echo base_url('assets/images/science/science.jpeg') ?>"
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
                                <img src="<?php echo base_url('assets/images/science/science.jpeg') ?>"
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
                                <img src="<?php echo base_url('assets/images/science/science.jpeg') ?>"
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



    <script>
        const minRange = document.getElementById('minRange');
        const maxRange = document.getElementById('maxRange');
        const priceFrom = document.getElementById('priceFrom');
        const priceTo = document.getElementById('priceTo');

        // Update the inputs when the range sliders change
        minRange.addEventListener('input', () => {
            let minValue = parseInt(minRange.value);
            let maxValue = parseInt(maxRange.value);

            if (minValue >= maxValue) {
                minRange.value = maxValue - 1; // Prevent overlap
                minValue = maxValue - 1;
            }

            priceFrom.value = minValue;
        });

        maxRange.addEventListener('input', () => {
            let minValue = parseInt(minRange.value);
            let maxValue = parseInt(maxRange.value);

            if (maxValue <= minValue) {
                maxRange.value = minValue + 1; // Prevent overlap
                maxValue = minValue + 1;
            }

            priceTo.value = maxValue;
        });

        // Update the range sliders when the number inputs change
        priceFrom.addEventListener('input', () => {
            let minValue = parseInt(priceFrom.value);
            let maxValue = parseInt(priceTo.value);

            if (minValue >= maxValue) {
                priceFrom.value = maxValue - 1;
                minValue = maxValue - 1;
            }

            minRange.value = minValue;
        });

        priceTo.addEventListener('input', () => {
            let minValue = parseInt(priceFrom.value);
            let maxValue = parseInt(priceTo.value);

            if (maxValue <= minValue) {
                priceTo.value = minValue + 1;
                maxValue = minValue + 1;
            }

            maxRange.value = maxValue;
        });
    </script>
</body>

</html>