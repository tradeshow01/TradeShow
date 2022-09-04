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
                    <img src="https://img.freepik.com/premium-vector/man-background-forex-chart-conceptual-illustration-topic-strategic-planning-trading-stock-exchange_531064-9076.jpg?w=1060" class="img-fluid" />
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