<!-- navbar section -->

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
</style>


<nav class="navbar navbar-expand-lg navbar-light shadow sticky-nav ">
    <div class="container">
        <!-- logo -->
        <a class="navbar-brand" href="<?php echo base_url() . 'User/index'; ?>">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" width="70" height="70">
        </a>

        <!-- toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-lg-0 montserrat ">
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5 mx-1 navStyle " href="<?php echo base_url() . 'User/Luxury'; ?>">
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