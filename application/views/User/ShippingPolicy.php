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

    <title>Fragnance | Shipping Policy</title>


    <style>
        table {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar Code Include  -->

    <?php $this->load->view('include/Navbar'); ?>


    <!-- About Us Code Start  -->

    <div class="container">
        <h1 class="montserrat text-center my-5 fw-bold">Shipping Policy</h1>
        <div class="row mb-5">
            <div class="col-md-9 mx-auto" style="text-align: justify;">
                <h5 class="montserrat fw-bold mt-5">How does the delivery process work?</h5>
                <p class="montserrat lh-lg">Once our system processes your order, your products are inspected thoroughly
                    to ensure they are in perfect condition.</p>
                <p class="montserrat lh-lg">After they pass through the final round of quality check, they are packed
                    and handed over to Fragnance's trusted delivery partner.</p>
                <p class="montserrat lh-lg">Our delivery partners then bring the package to you at the earliest possible
                    time. In case they are unable to reach your provided address or at a suitable time, they will
                    contact you to resolve the issue.</p>

                <h5 class="montserrat fw-bold mt-5">My order has been shipped. Now how can I track it?</h5>
                <p class="montserrat lh-lg">Once your order has been dispatched, you will receive an email with the
                    details of the tracking number and the courier company that is processing your order.</p>
                <p class="montserrat lh-lg">You can track the status of your package 24 hours after your order is
                    dispatched from Fragnance's warehouse.</p>
                <p class="montserrat lh-lg">Following are some of our trusted courier partners:</p>
                <p class="montserrat lh-lg">
                    - Bluedart - <a href="http://www.bluedart.com/">http://www.bluedart.com/</a><br>
                    - Delhivery - <a href="http://www.delhivery.com/">http://www.delhivery.com/</a><br>
                    - Aramex - <a href="http://www.aramex.com/">http://www.aramex.com/</a><br>
                    - DTDC - <a href="http://www.dtdc.in/">http://www.dtdc.in/</a><br>
                    - Ecom Express - <a href="http://www.ecomexpress.in/">http://www.ecomexpress.in/</a><br>
                    - Wow Express - <a href="http://www.wowexpress.in/">http://www.wowexpress.in/</a><br>
                    - Pickrr - <a href="http://www.pickrr.com/tracking/#/">http://www.pickrr.com/tracking/#/</a>
                </p>

                <h5 class="montserrat fw-bold mt-5">What is the estimated dispatch time?</h5>
                <p class="montserrat lh-lg">Fragnance usually dispatches most orders within 1-2 business days (excluding
                    Sundays and public holidays).</p>

                <h5 class="montserrat fw-bold mt-5">What is the estimated delivery time?</h5>
                <p class="montserrat lh-lg">The orders are estimated to be delivered within 2-4 business days from the
                    dispatch date (excluding government-imposed restrictions and natural calamities).</p>

                <h5 class="montserrat fw-bold mt-5">Are there any shipping charges applicable on my order?</h5>
                <p class="montserrat">Fragnance has standard shipping charges for most addresses.</p>
                <p class="montserrat">India shipping charges - A flat Rs.40 charge is applied to all COD orders.
                </p>

                <div class="container montserrat">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Order Value</th>
                                <th>Shipping Charges</th>
                                <th>COD Charges</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>₹0-₹149</td>
                                <td>₹99</td>
                                <td>₹40</td>
                            </tr>
                            <tr>
                                <td>₹150-₹299</td>
                                <td>₹49</td>
                                <td>₹40</td>
                            </tr>
                            <tr>
                                <td>₹300-₹4000</td>
                                <td>₹0</td>
                                <td>₹40</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <h5 class="montserrat fw-bold mt-5">Does Fragnance ship outside India?</h5>
                <p class="montserrat lh-lg">At present, Fragnance ships only to India. However, we are working on
                    starting international delivery to many other countries, so stay tuned!</p>



            </div>

        </div>

    </div>

    <!-- Footer Code Include  -->

    <?php $this->load->view('include/Footer'); ?>

</body>

</html>