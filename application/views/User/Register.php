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


    <!-- Fonts CDN Link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Create Account | Fragnance</title>

    <style>
        /* Register button CSS */

        .register-container {
            max-width: 500px;
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

        .btn-create:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
            border: 1px solid #000;
            background-color: #fff;
            color: #000;
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

        .btn-login:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
        }
    </style>

</head>

<body class="montserrat">

    <!-- Navbar Code Include  -->
    <?php $this->load->view('include/Navbar'); ?>

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
            <a href="<?php echo base_url() . 'User/Login'; ?>"><button type="button" class="btn btn-login">Login</button></a>
        </form>
    </div>


    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

</body>

</html>