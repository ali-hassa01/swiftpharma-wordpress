 <?php // header start ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medshop || Responsive HTML5 Template</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"   href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png" />
    <meta name="description" content="Medshop HTML 5 Template " />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/aos/aos.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fancybox/fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/thm-icons/style.css" />
    <!-- Module css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/01-header-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/02-banner-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/03-about-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/04-fact-counter-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/05-testimonial-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/06-partner-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/07-footer-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/08-blog-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/09-breadcrumb-section.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/10-contact.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/module-css/11-services-section.css" />
    <!-- Template styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />
    <?php wp_head(); ?>
 
</head>

   <body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="layer layer-one">
                    <span class="overlay"></span>
                </div>
                <div class="layer layer-three">
                    <span class="overlay"></span>
                </div>
                <div class="layer layer-two">
                    <span class="overlay"></span>
                </div>
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- Cursor End -->

    <!-- switcher menu -->
    <div class="switcher">
        <div class="switch_btn">
            <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end switcher menu -->


    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="assets/images/resources/side-content__logo.png" alt="" />
                                </a>
                            </div>
                            <div class="content-box">
                                <h3>
                                    Welcome to our Medical Center.
                                    Contact us today & feel good again...
                                </h3>
                                <div class="inner-text">
                                    <p>
                                        We’re Cleaning for you Since 1987, Providing the Best Services for Our
                                        Customers. Meet Our Experienced & Professional Team, Professional Customer
                                        Service.
                                    </p>
                                </div>
                            </div>
                            <div class="sidebar-contact-info">
                                <h3>Conatct Us</h3>
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="text">
                                                <p>54B, Tailstoi Town 5238 MT,<br> La city, IA 522364</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="text">
                                                <p><a href="mailto:info@example.com">contact@Medshop.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="text">
                                                <p><a href="tel:+8801682648101">+1800 456 7890</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="text">
                                                <p>Working Hrs : 9.30am to 6.30pm</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="side-content-newsletter-box">
                                <h3>Newsletter Subscription</h3>
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                                        <button class="btn-one" type="submit">
                                            <span class="txt">
                                                subscribe now
                                                <i class="icon-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="thm-social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <i class="icon-facebook-app-symbol"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked-in-logo-of-two-letters"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->


    <div class="page-wrapper boxed_wrapper">
        <header class="main-header main-header-style1">

            <!--Start Main Header Style1 Top-->
            <div class="main-header-style1__top">
                <div class="container">
                    <div class="main-header-style1__top-inner">
                        <div class="main-header-style1__top-left">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-open-mail"></span>
                                        </div>
                                        <div class="text">
                                            <h6><a href="mailto:yourmail@email.com">needhelp@company.com</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location-pin"></span>
                                        </div>
                                        <div class="text">
                                            <h6>2464 Royal Ln. Mesa, New Jersey 45463</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-header-style1__top-right">
                            <div class="header-social-link-style1">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <i class="icon-facebook-app-symbol"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-linked-in-logo-of-two-letters"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Header Style1 Top-->

            <!--Start Main Menu Style1-->
            <nav class="main-menu main-menu-style1">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">

                            <div class="main-menu-style1__left">
                                <div class="logo-box-style1">
                                    <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/logo-1.png" alt="Awesome Logo" title="">
                                    </a>
                                </div>
                            </div>

                            <div class="main-menu-style1__middle">
                                <div class="main-menu-box">
                                    <a href="#" class="mobile-nav__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>

                                    <ul class="main-menu__list">
                                        
                                              <li> <a href="<?php echo home_url(); ?>">Home</a></li>
                                               

                                          <li><a href="<?php echo home_url('/about-us/'); ?>">About Us</a></li>
                                       <li class="dropdown">
    <a href="<?php echo home_url('/shop/'); ?>">Shop</a>
    <ul>
        <li><a href="<?php echo home_url('/shop/'); ?>">Products</a></li>
        <li><a href="<?php echo home_url('/cart/'); ?>">Shopping Cart</a></li>
        <li><a href="<?php echo home_url('/checkout/'); ?>">Checkout</a></li>
        <li><a href="<?php echo home_url('/my-account/'); ?>">My Account</a></li>
    </ul>
</li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li><a href="<?php echo home_url('/testimonials/'); ?>">Testimonials</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <ul>
                                                   <li><a href="<?php echo home_url('/blog/'); ?>">View All Blog Posts</a></li>
                                               
                                                   
                                            </ul>
                                        </li>
                                           <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
                                    </ul>

                                </div>
                            </div>

                            <div class="main-menu-style1__right">
                                <div class="header-wishlist-cart-btn">
                                    <button>
                                        <i class="icon-heart"></i>
                                        <span class="count">0</span>
                                    </button>
                                    <button>
                                        <i class="icon-shopping-cart"></i>
                                        <span class="count">0</span>
                                    </button>
                                </div>
                                <div class="header-search-box">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="search" required="">
                                            <button>
                                                <i class="icon-search-interface-symbol"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="side-content-button">
                                    <a class="navSidebar-button" href="#">
                                        <span class="line"></span>
                                        <span class="line two"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
            <!--End Main Menu Style1-->
        </header>

        <div class="stricky-header stricky-header--style1 stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->


       