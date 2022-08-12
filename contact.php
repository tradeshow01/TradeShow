<?php

include "head.php";
include "header.php";

?>

<!-- Header End -->
<div class="clearfix"></div>
<!--======= Breadcrumb Inner Page =======-->
<section class="iq-bg iq-bg-fixed iq-over-black-70 jarallax iq-breadcrumb text-center text-white" style="background-image: url('images/bg/bg-2.jpg'); background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="heading-title iq-mb-25">
                    <h2 class="title text-uppercase text-white ">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>

</section>
<!--======= Breadcrumb Inner Page =======-->
<div class="main-content">
    <!-- Contact Us -->
    <section class="contact-2">
        <div class="container">
            <div class="row iq-ptb-60">
                <div class="col-lg-6">
                    <h2 class="iq-mtb-25 contactcolor">Contact Info</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26370883.089492414!2d-113.7087315523955!3d36.21271711914428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1660319093915!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6">
                    <h2 class="iq-mtb-25 contactcolor">Contact Form</h2>
                    <div id="formmessage contactcolor">Success/Error Message Goes Here</div>
                    <form class="form-horizontal" action="mail.php" method="post">
                        <div class="contact-form">
                            <div class="section-field iq-mb-30">
                                <input id="name" type="text" placeholder="Name*" required name="name">
                            </div>
                            <div class="section-field iq-mb-30">
                                <input id="email" type="email" placeholder="Email*" required name="email">
                            </div>
                            <div class="section-field iq-mb-30">
                                <input id="phone" type="tel" maxlength="10" placeholder="Phone*" name="phone" required>
                            </div>
                            <div class="section-field iq-mb-30">
                                <textarea class="input-message" placeholder="Comment*" name="message" required></textarea>
                                <input type="hidden" name="action" value="sendEmail" />
                                <button type="submit" class="button iq-mt-30 rounded  pull-right" href="javascript:void(0)">
                                    <span class="button-inner-box">

                                        <span class="text-btn">Send Message</span>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.html" alt=""></div>
                </div>
            </div>
        </div>

    </section>
    <!-- Contact Us -->


</div>
<!-- Main Content End -->
<div class="clearfix"></div>
<!--=================================
Footer -->

<?php
include "footer.php";
?>