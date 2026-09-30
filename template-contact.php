  <?php /* Template Name: Contact Page */ get_header(); ?>
 <!--Start breadcrumb Style1-->
        <section class="breadcrumb-style1">
            <div class="breadcrumb-style1__img1 wow slideInLeft animated" data-wow-delay="100ms"
                data-wow-duration="2000ms">
                <img class="float-bob-x" <?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb/breadcrumb-img1.png" alt="">
            </div>
            <div class="shape1 wow fadeInDown animated" data-wow-delay="100ms" data-wow-duration="5000ms">
                <img class="float-bob-y" <?php echo get_template_directory_uri(); ?>/assets/images/shapes/breadcrumb-shape1.png" alt="">
            </div>
            <div class="shape2 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="5000ms">
                <img class="float-bob-y" <?php echo get_template_directory_uri(); ?>/assets/images/shapes/breadcrumb-shape2.png" alt="">
            </div>
            <div class="shape3">
                <img class="float-bob-x" <?php echo get_template_directory_uri(); ?>/assets/images/shapes/breadcrumb-shape3.png" alt="">
            </div>
            <div class="container">
                <div class="inner-content text-center">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="<?php echo home_url(); ?>"><span class="icon-home"></span> Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb Style1-->


        <!--Start Contact Info Style1-->
        <section class="contact-info-style1">
            <div class="container">
                <div class="sec-title text-center sec-title-animation animation-style1">
                    <h2 class="title-animation">Send Us A Message <br> For team</h2>
                </div>
                <div class="row">

                    <!--Start Contact Info Style1 Single-->
                    <div class="col-xl-4">
                        <div class="contact-info-style1__single">
                            <div class="icon-box">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="content-box">
                                <h2>Phone Number</h2>
                                <p><a href="tel:123456789">(239) 231-6333</a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Info Style1 Single-->

                    <!--Start Contact Info Style1 Single-->
                    <div class="col-xl-4">
                        <div class="contact-info-style1__single">
                            <div class="icon-box">
                                <span class="icon-email"></span>
                            </div>
                            <div class="content-box">
                                <h2>Email Address</h2>
                                <p><a href="mailto:yourmail@email.com">medshop@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Info Style1 Single-->

                    <!--Start Contact Info Style1 Single-->
                    <div class="col-xl-4">
                        <div class="contact-info-style1__single">
                            <div class="icon-box">
                                <span class="icon-location-pin"></span>
                            </div>
                            <div class="content-box">
                                <h2>Our Location</h2>
                                <p>Preston Rd. Inglewood, Maine</p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Info Style1 Single-->
                </div>
            </div>
        </section>
        <!--End Contact Info Style1-->


        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-12">
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="assets/inc/sendmail.php" method="post">

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_name" id="formName"
                                                    placeholder="Your Name*" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="form_email" id="formEmail"
                                                    placeholder="Email Address*" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" id="formPhone"
                                                    placeholder="Phone Number*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="form_message" id="formMessage"
                                                    placeholder="Your Message*" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    Send Message
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <!--Google Map Start-->
                        <div class="contact-page__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="google-map__one" allowfullscreen></iframe>
                        </div>
                        <!--Google Map End-->
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Page-->


        <!--Start Subscribe Style1-->
        <section class="subscribe-style1">
            <div class="container">
                <div class="subscribe-style1__inner">
                    <div class="subscribe-style1__content">
                        <h2>Subscribe Our News Letter</h2>
                        <p>Contact us now to have all of your tour-related question answered.</p>
                    </div>

                    <div class="subscribe-style1__form">
                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Submit Your Email" required="">
                                <button class="submit">
                                    <i class="icon-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Subscribe Style1-->
        <?php get_footer(); ?>
