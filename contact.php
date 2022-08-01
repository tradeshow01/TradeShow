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
                    <h2 class="title text-uppercase text-white ">Contact Us 2</h2>
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                <div class="col-lg-5">
                    <h2 class="iq-mtb-25">Contact Info</h2>
                    <div class="contact-box iq-mb-30 d-flex align-items-center">
                        <i aria-hidden="true" class="ion-ios-location-outline iq-icon"></i>
                        <div class="ms-3">
                            <h5 class="iq-title text-uppercase mb-3  iq-font-yellow">Address</h5>
                            <p>1234 North Avenue Luke Lane, South Bend,
                                <br> IN 360001
                            </p>
                        </div>

                    </div>
                    <div class="contact-box iq-mb-30 d-flex align-items-center">
                        <i aria-hidden="true" class="ion-ios-telephone-outline iq-icon"></i>
                        <div class="ms-3">
                            <h5 class="iq-title text-uppercase mb-3  iq-font-yellow">Phone</h5>
                            <p>+0123 456 789 <span>(Mon-Fri 8:00am - 8:00pm)</span> </p>
                        </div>

                    </div>
                    <div class="contact-box iq-mb-30 d-flex align-items-center">
                        <i aria-hidden="true" class="ion-ios-email-outline iq-icon"></i>
                        <div class="ms-3">
                            <h5 class="iq-title text-uppercase mb-3  iq-font-yellow">Mail</h5>
                            <p>mail@appino.com <span>(Mon-Fri 8:00am - 8:00pm)</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="iq-mtb-25">Contact Form</h2>
                    <div id="formmessage">Success/Error Message Goes Here</div>
                    <form class="form-horizontal" id="contactform" method="post" action="https://templates.iqonic.design/coinex/html/php/contact-form.php">
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
        <div>
            <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="iq-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->
    <!-- Clients -->
    <div class="iq-our-clients particles-bg yellow-bg iq-ptb-40">
        <canvas id="canvas"></canvas>
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 col-md-12 ">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="5" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/01.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/02.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/03.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/04.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/05.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/06.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/01.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/02.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/03.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/04.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/05.png" alt="#"></a></div>
                        <div class="item"> <a href="clients.html"><img class="img-fluid" src="images/clients/white/06.png" alt="#"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients -->

</div>
<!-- Main Content End -->
<div class="clearfix"></div>
<!--=================================
Footer -->

<?php
include "footer.php";
?>