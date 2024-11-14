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

    <title>Fragnance | Product Discription</title>

    <style>
        .product-image {
            border: 1px solid #333;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <!-- Navbar Code Include  -->
    <?php $this->load->view('include/Navbar'); ?>


    <div class="container py-5 montserrat">
        <div class="row">

            <!-- Image Gallery Section -->
            <!-- Main Product Image and Details Section -->
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/images/tranding/OGLuxuryPerfumeSmokey.jpg') ?>"
                    class="img-fluid mb-3 product-image" alt="Main Product">
            </div>


            <!-- Deals Section -->
            <div class="col-md-5 offset-md-1">
                <h5 class="text-muted">OG BEAUTY Luxury Eau De Parfum Shadow, 50 ML</h5>
                <p>Long lasting | Premium scent | Fragrance</p>
                <h4 class="text-danger">₹ 349 <small class="text-muted"><s>₹ 399</s></small></h4>

                <h6 class="mt-4">What makes it great:</h6>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle"></i> Long lasting Eau De Parfum</li>
                    <li><i class="bi bi-check-circle"></i> Classic blend of Lavender, Black Pepper & Amber</li>
                    <li><i class="bi bi-check-circle"></i> Elegant, sophisticated & luxurious fragrance</li>
                    <li><i class="bi bi-check-circle"></i> Travel friendly & ideal for gifting purpose</li>
                </ul>

                <!-- Quantity and Buttons Section -->
                <div class="d-flex align-items-center mt-4">
                    <input type="number" class="form-control w-25 me-2" value="1" min="1">
                    <button class="btn btn-outline-dark me-2 add-to-cart-btn"><i class="bi bi-cart"></i> Add to
                        Cart</button>
                    <a href="<?php echo base_url('User/Checkout') ?>"> <button class="btn btn-dark">Buy it
                            now</button></a>
                </div>
                <div class="bg-light p-3 rounded mt-4">
                    <h6 class="text-success mb-2">Grab Your Deals</h6>
                    <p>Flat ₹100 off on orders above ₹600</p>
                    <p>Use Code: <strong>FLAT100-OFF</strong></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Fragrance Code -->

    <div class="container my-3 d-flex montserrat justify-content-center align-items-center">
        <div class="row text-center">
            <h5 class="card-title mb-4 fs-2">The Fragrance Code</h5>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


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