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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235527.4544718161!2d75.72376235588722!3d22.723911730259125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1659962288391!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6">
                    <h2 class="iq-mtb-25 contactcolor">Contact Form</h2>
                    <div id="formmessage contactcolor">Success/Error Message Goes Here</div>
                    <form class="form-horizontal" action="mail.php" id="contactform" method="post" action="https://templates.iqonic.design/coinex/html/php/contact-form.php">
                        <div class="contact-form">
                            <div class="section-field iq-mb-30">
                                <input id="name" type="text" placeholder="Name*" name="name">
                            </div>
                            <div class="section-field iq-mb-30">
                                <input id="email" type="text" placeholder="Email*" name="email">
                            </div>
                            <div class="section-field iq-mb-30">
                                <input id="phone" type="text" placeholder="Phone*" name="phone">
                            </div>
                            <div class="section-field iq-mb-30">
                                <textarea class="input-message" placeholder="Comment*" name="message"></textarea>
                                <input type="hidden" name="action" value="sendEmail" />
                                <a class="button iq-mt-30 rounded  pull-right" href="javascript:void(0)">
                                    <span class="button-inner-box">
                                        <span class="icon-one icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
                                            </svg></span>
                                        <span class="text-btn">Send Message</span>
                                        <span class="icon-two icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
                                            </svg></span>
                                    </span>
                                </a>
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