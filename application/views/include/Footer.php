<style>
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


<!-- Footer Code -->

<div class="footer montserrat">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <h5 class="footer-title">WHO WE ARE</h5>
                <p class="lh-lg">Bringing you the best of Beauty with the best of results of Naturals at the best
                    prices guaranteed with Quality.</p>
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
                    <li><a href="<?php echo base_url('User/login') ?>">Account</a></li>
                    <li><a href="<?php echo base_url('User/TrackOrder') ?>">Track Order</a></li>
                    <li><a href="<?php echo base_url('User/ShippingPolicy') ?>">Shipping Policy</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <h5 class="footer-title">IMPORTANT LINKS</h5>
                <ul class="list-unstyled lh-lg">
                    <li><a href="<?php echo base_url('User/AboutUs') ?>">About Us</a></li>
                    <li><a href="<?php echo base_url('User/ContactUs') ?>">Contact Us</a></li>
                    <li><a href="<?php echo base_url('User/TermsAndConditions') ?>">Terms & Conditions</a></li>
                    <li><a href="<?php echo base_url('User/PrivacyPolicy') ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo base_url('User/ReturnAndRefundPolicy') ?>">Return & Refund Policy</a></li>
                </ul>

            </div>
            <div class="col-md-2 col-sm-6 mb-4">
                <h5 class="footer-title">FOLLOW US ON:</h5>
                <div class="social-icons mt-3 lh-lg fs-3">
                    <a href="https://www.facebook.com/fragnance.in" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/fragnance.in" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom mt-4" style="font-size:16px;">
            <a href="<?php echo base_url('User/TermsAndConditions') ?>">Terms & Conditions</a> | <a
                href="<?php echo base_url('User/PrivacyPolicy') ?>">Privacy Policy</a>
            <br>
            &copy; Fragnance Private Limited 2024. All Rights Reserved
        </div>
    </div>
</div>