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


    <!-- Fonts CDN Link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Create Account | Fragnance</title>

    <style>
        /* Fonts CSS */
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

        /* Register button CSS */

        .register-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .register-container h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .breadcrumb {
            justify-content: center;
            font-size: 0.9rem;
            background-color: transparent;
            margin-bottom: 20px;
        }

        .btn-create {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-radius: 0;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
        }

        .btn-login {
            background-color: #f8f9fa;
            color: #000;
            font-weight: bold;
            border: 1px solid #ccc;
            border-radius: 0;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
        }




        /* Footer CSS */

        .footer {
            background-color: #111;
            /* Dark background color */
            color: #ccc;
            /* Light text color */
            padding: 40px 0;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer .footer-title {
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        .footer .social-icons a {
            color: #ccc;
            margin-right: 10px;
        }

        .footer .social-icons a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 15px;
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #aaa;
        }
    </style>

</head>

<body>

    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light shadow sticky-nav ">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="<?php echo base_url() . 'User/index'; ?>">
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
                        <a class="dropdown-item" href="<?php echo base_url() . 'User/UserProfile'; ?>">Login</a>
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


    <!-- Register Container -->

    <div class="register-container">
        <h1>Register</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'User/index'; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Account</li>
            </ol>
        </nav>

        <form>
            <div class="mb-3 text-start">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
            </div>
            <div class="mb-3 text-start">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
            </div>
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-create">Create now</button>
            <button type="button" class="btn btn-login">Login</button>
        </form>
    </div>



    <!-- <div class="login-container">
        <h1>Login</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
        </nav>

        <form>
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Your email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3 text-start">
                <a href="#" class="form-text">Forgot your password?</a>
            </div>
            <button type="submit" class="btn btn-login">Sign in</button>

            <div class="or-divider">
                <hr>
                <span>OR</span>
                <hr>
            </div>

            <a href="<?php echo base_url() . 'User/register'; ?>"><button type="button"
                    class="btn btn-create-account">Create account</button></a>
        </form>
    </div> -->


    <!-- Footer Code -->

    <div class="footer montserrat">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <h5 class="footer-title">WHO WE ARE</h5>
                    <p class="lh-lg">Bringing you the best of Beauty with the best of results of Naturals at the best
                        prices
                        guaranteed with Quality.</p>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5 class="footer-title">CATEGORIES</h5>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="#">Luxury</a></li>
                        <li><a href="#">Natural</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Wellness</a></li>
                        <li><a href="#">Offers</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5 class="footer-title">ORDERS</h5>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="<?php echo base_url() . 'User/login'; ?>">Account</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5 class="footer-title">IMPORTANT LINKS</h5>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Return & Refund Policy</a></li>
                    </ul>

                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <h5 class="footer-title">FOLLOW US ON:</h5>
                    <div class="social-icons mt-3 lh-lg fs-3">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-4" style="font-size:16px;">
                <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
                <br>
                &copy; Fragnance Private Limited 2024. All Rights Reserved
            </div>
        </div>
    </div>
</body>

</html>