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

    <title>Fragnance | Cart</title>

    <style>
        /* Basic styling for the cart badge */
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
    </style>

    <style>
        .cart-table th {
            background-color: #f7f7f7;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-control button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            padding: 8px 15px;
            border-radius: 50%;
        }

        .remove-btn {
            color: #fff;
            background-color: #dc3545;
            border: none;
            border-radius: 40%;
            padding: 8px 12px;
        }
    </style>
</head>

<body>

    <!-- Navbar Code Include  -->

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




    <div class="container my-5 montserrat">
        <h2 class="text-center mb-4">Shopping Cart</h2>
        <div class="table-responsive">
            <table class="table align-middle cart-table">
                <thead>
                    <tr>
                        <th>Product Details</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Product Row 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url() . 'assets/images/science/science.jpeg'; ?>"
                                    alt="Product Image" class="me-3" style="width: 100px; height: auto;">
                                <div>
                                    <h6 class="mb-0">Science 360 Degree Skincare Protection</h6>
                                </div>
                            </div>
                        </td>
                        <td>₹999</td>
                        <td>
                            <div class="quantity-control">
                                <button class="btn decrease-qty">-</button>
                                <input type="text" class="form-control text-center mx-2 quantity-input" value="1"
                                    style="width: 50px;">
                                <button class="btn increase-qty">+</button>
                            </div>
                        </td>
                        <td class="item-total">₹999</td>
                        <td>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Product Row 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url() . 'assets/images/science/science.jpeg'; ?>"
                                    alt="Product Image" class="me-3" style="width: 100px; height: auto;">
                                <div>
                                    <h6 class="mb-0">Science SPF 50 PA+++ Sunscreen with Vitamin C</h6>
                                </div>
                            </div>
                        </td>
                        <td>₹799</td>
                        <td>
                            <div class="quantity-control">
                                <button class="btn decrease-qty">-</button>
                                <input type="text" class="form-control text-center mx-2 quantity-input" value="1"
                                    style="width: 50px;">
                                <button class="btn increase-qty">+</button>
                            </div>
                        </td>
                        <td class="item-total">₹799</td>
                        <td>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Product Row 3 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url() . 'assets/images/science/science.jpeg'; ?>"
                                    alt="Product Image" class="me-3" style="width: 100px; height: auto;">
                                <div>
                                    <h6 class="mb-0">SCIENCE SPF 50 PA+++ Sunscreen Body Lotion</h6>
                                </div>
                            </div>
                        </td>
                        <td>₹1299</td>
                        <td>
                            <div class="quantity-control">
                                <button class="btn decrease-qty">-</button>
                                <input type="text" class="form-control text-center mx-2 quantity-input" value="1"
                                    style="width: 50px;">
                                <button class="btn increase-qty">+</button>
                            </div>
                        </td>
                        <td class="item-total">₹1299</td>
                        <td>
                            <button class="remove-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Enter Coupon Code">
                        <a href="#"><button class="btn btn-primary mt-2">Apply</button></a>
                    </div>
                    <div class="col-sm-4">
                        <!-- <button class="btn btn-primary">Clear Coupon</button> -->
                    </div>

                    <div class="col-sm-4 text-center">
                        <div class="total bg-light rounded p-3 mt-3">
                            <div class="sub">
                                <p class="d-flex justify-content-between">
                                    <span>Subtotal:</span> <span>₹ 2997 /-</span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span>Delivery:</span> <span>₹ 0.00 /-</span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span>Discount:</span> <span>₹ 0.00 /-</span>
                                </p>
                            </div>
                            <div class="grand-total mt-3">
                                <p class="d-flex justify-content-between">
                                    <strong>Total:</strong> <span>₹ 2997 /-</span>
                                </p>
                            </div>
                            <a href="<?php echo base_url('User/Checkout'); ?>"><button class="btn btn-dark btn-lg btn-block mt-3" type="submit">Continue to
                                    checkout</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript to handle Add to Cart functionality -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const decreaseButtons = document.querySelectorAll(".decrease-qty");
            const increaseButtons = document.querySelectorAll(".increase-qty");
            const quantityInputs = document.querySelectorAll(".quantity-input");
            const itemTotals = document.querySelectorAll(".item-total");

            function updateTotal(row) {
                const price = parseFloat(row.querySelector("td:nth-child(2)").innerText.replace('₹', ''));
                const quantity = parseInt(row.querySelector(".quantity-input").value);
                const totalCell = row.querySelector(".item-total");
                totalCell.innerText = `₹${(price * quantity).toFixed()}`;
            }

            decreaseButtons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const quantityInput = quantityInputs[index];
                    let quantity = parseInt(quantityInput.value);
                    if (quantity > 1) {
                        quantityInput.value = --quantity;
                        updateTotal(button.closest("tr"));
                    }
                });
            });

            increaseButtons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const quantityInput = quantityInputs[index];
                    let quantity = parseInt(quantityInput.value);
                    quantityInput.value = ++quantity;
                    updateTotal(button.closest("tr"));
                });
            });

            quantityInputs.forEach((input, index) => {
                input.addEventListener("change", function () {
                    if (input.value < 1) input.value = 1;
                    updateTotal(input.closest("tr"));
                });
            });
        });
    </script>

</body>

</html>