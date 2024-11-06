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

    <!-- GSAP CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>

    <!-- Fonts CDN Link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>Fragnance | About Us</title>
</head>

<body>

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>


    <!-- About Us Code Start  -->

    <div class="container">
        <h1 class="montserrat text-center my-5 fw-bold">About Us</h1>
        <div class="row mb-5">
            <div class="col-md-8 mx-auto" style="text-align: justify;">
                <p class="montserrat lh-lg">Presenting Fragnance, your one-stop destination for high-quality beauty and
                    personal care products at prices that won't break the bank. We're dedicated to helping you look and
                    without emptying your wallet.
                </p>
                <p class="montserrat lh-lg">At Fragnance, we believe that everyone deserves to pamper themselves, and
                    our
                    mission is to make quality beauty and personal care accessible to all. Our extensive range of
                    products—Fragnance Beauty, Fragnance Luxury, Fragnance Science, Fragnance Ayurveda, and Fragnance
                    Naturals—are all carefully curated to provide you with effective solutions for your self-care
                    needs at the lowest prices guaranteed.
                </p>
            </div>

        </div>

    </div>

    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

</body>

</html>