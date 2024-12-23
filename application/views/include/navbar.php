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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-lg-0 montserrat">
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5 mx-1 navStyle" href="<?php echo base_url() . 'User/Luxury'; ?>">
                        Luxury
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1 text-dark fs-5 navStyle" href="<?php echo base_url() . 'User/Natural'; ?>">
                        Natural
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1 text-dark fs-5 navStyle" href="<?php echo base_url() . 'User/Science'; ?>">
                        Science
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1 text-dark fs-5 navStyle" href="<?php echo base_url() . 'User/Wellness'; ?>">
                        Wellness
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-1 text-dark fs-5 navStyle" href="<?php echo base_url() . 'User/Offers'; ?>">
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
                <button class="btn border-0 dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
