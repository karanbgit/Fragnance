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

    <title>Fragnance | About Us</title>

    <style>
        .breadcrumb {
            justify-content: center;
            font-size: 0.9rem;
            background-color: transparent;
            margin-bottom: 20px;
        }

        /* Custom styling for nav-pills */
        .nav-pills .nav-link {
            color: #333;
            font-weight: normal;
        }

        .nav-pills .nav-link.active {
            font-weight: bold;
            background-color: transparent;
            color: #007bff;
            border-left: 4px solid #007bff;
        }


        /* Form Control Styling */

        .form-control {
            border: 1px solid #ccc;
            /* Default border */
            border-radius: 5px;
        }

        .no-border {
            border: none;
            box-shadow: none;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ccc;
        }


        .btn-address {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-radius: 0;
            width: auto;
            padding: 5px;

        }

        .btn-address:hover {
            transform: scale(1.01);
            transition: transform 0.3s;
            border: 1px solid #000;
        }

        .btn-add-address {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-radius: 0;
            width: auto;
            padding: 5px;

        }

        .btn-add-address:hover {
            transform: scale(1.01);
            transition: transform 0.3s;
            border: 1px solid #000;
        }


        .btn-cancel {
            background-color: #000;
            color: #fff;
            font-weight: bold;
            border-radius: 0;
            width: auto;
            padding: 5px;

        }

        .btn-cancel:hover {
            transform: scale(1.01);
            transition: transform 0.3s;
            border: 1px solid #000;
        }
    </style>
</head>

<body>

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>


    <!-- About Us Code Start  -->

    <div class="container montserrat">
        <h1 class="montserrat text-center my-5 fw-bold">My account</h1>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb fs-5">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'User/index'; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
        </nav>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <!-- Vertical Nav Pills -->
                    <ul class="nav nav-pills flex-column" id="v-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill"
                                href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard"
                                aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#v-pills-address"
                                role="tab" aria-controls="v-pills-address" aria-selected="false">Address</a>
                        </li>
                        <a href="#" class="nav-link">Logout</a>
                    </ul>
                </div>

                <!-- Vertical line between columns -->
                <div class="col-md-9">
                    <!-- Tab Content for each section -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                            aria-labelledby="v-pills-dashboard-tab">
                            <p class="fs-5 mt-4">Hello, Karan</p>
                            <div class="fs-4 my-4"><strong>Order History</strong></div>
                            <div class="fs-4 my-3"><strong>Account details</strong></div>

                            <form action="">
                                <div class="lh-lg" style="font-size: 1rem;">
                                    <div class="form-group d-flex flex-row gap-5">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control no-border" id="name" name="name"
                                            placeholder="Karan Barale" readonly>
                                    </div>
                                    <hr>
                                    <div class="form-group d-flex flex-row gap-5 mb-5">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control no-border" id="email" name="email"
                                            placeholder="karan@gmail.com" readonly>
                                    </div>


                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="v-pills-address" role="tabpanel"
                            aria-labelledby="v-pills-address-tab">

                            <!-- Button to Add a New Address -->
                            <!-- Add count of address you store in data base -->
                            <div class="fs-4 mt-4"><strong>Your Address (0)</strong></div>
                            <a href="#" class="btn btn-address my-4" id="add-address-btn">Add a New Address</a>

                            <!-- Form hidden initially -->
                            <div id="address-form" class="mb-5" style="display: none;">
                                <form>
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first-name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" placeholder="India"
                                            readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" required>
                                    </div>
                                    <div class="d-flex flex-row gap-3">
                                        <button type="submit" class="btn btn-add-address">Submit</button>
                                        <button type="button" class="btn btn-cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!-- JavaScript to toggle the form visibility -->
                        <script>
                            document.getElementById('add-address-btn').addEventListener('click', function (event) {
                                event.preventDefault(); // Prevent default anchor behavior
                                const form = document.getElementById('address-form');
                                form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>