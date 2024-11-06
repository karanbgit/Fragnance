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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">


    <title>Fragnance | Contact Us</title>

    <style>
        /* Add some spacing to each column */
        .col-md-3 {
            margin-bottom: 20px;
        }


        .contact-section {
            padding: 40px 0;
        }

        .contact-info,
        .contact-form {
            padding: 20px;
        }

        .icon {
            font-size: 1.2rem;
            margin-right: 8px;
        }

        .social-icons i {
            font-size: 1.5rem;
            /* margin-right: 15px; */
            /* color: #000; */
        }

        .footer-icons i {
            font-size: 1.5rem;
            color: #000;
            display: block;
            margin: auto;
        }
    </style>

</head>


<body class="montserrat">

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>


    <!-- Contact Us Code Start  -->
    <div class="container contact-section">
        <div class="row lh-lg">
            <!-- Contact Information -->
            <div class="col-md-6 contact-info">
                <h3>Let's get in touch</h3>
                <p><i class="icon bi bi-geo-alt"></i><strong>Office location</strong><br>Block 7 & 8, Garden View,
                    Sindhu Bhawan Marg, Cafe Flambe, Bodakdev, Ahmedabad, Gujarat - 380054, India</p>
                <p><i class="icon bi bi-telephone"></i><strong>Call us directly</strong><br>Phone: 9512304672 (Mon-Sat
                    from 11 am to 7 pm)</p>
                <p><i class="icon bi bi-envelope"></i><strong>Send a message</strong><br><a
                        href="mailto:hi@ogbeauty.in">hi@ogbeauty.in</a></p>
                <p>Follow us:
                    <span class="social-icons">
                        <i class="bi bi-facebook ps-2"></i>
                        <i class="bi bi-instagram ps-3  "></i>
                    </span>
                </p>
            </div>


            <!-- Contact Form -->
            <div class="col-md-6 contact-form">
                <h3 class="mb-4">Let's talk with us!</h3>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="What's your good name?">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" placeholder="Enter your phone number">
                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
                        <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">I agree with the <a href="#">terms &
                                conditions</a></label>
                    </div>
                    <button type="submit" class="btn btn-dark">Send message</button>
                </form>
            </div>
        </div>


        <!-- Footer Icons -->
        <div class="row text-center mt-5">
            <div class="col-3">
                <i class="bi bi-box footer-icons fs-1"></i>
                <p>Free shipping<br>Standard shipping</p>
            </div>
            <div class="col-3">
                <i class="bi bi-percent footer-icons fs-1"></i>
                <p>Special discounts<br>Guaranteed saving</p>
            </div>
            <div class="col-3">
                <i class="bi bi-shield-lock footer-icons fs-1"></i>
                <p>Buyers protection<br>Secure payment</p>
            </div>
            <div class="col-3">
                <i class="bi bi-chat-dots footer-icons fs-1"></i>
                <p>Customer service<br>Give us feedback</p>
            </div>
        </div>
    </div>

    <!-- Contact Us Code End  -->


    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"></script>

</body>

</html>