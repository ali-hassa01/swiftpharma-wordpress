<?php get_header(); ?>
<!--Start breadcrumb Style1-->
        <section class="breadcrumb-style1">
            <div class="breadcrumb-style1__img1 wow slideInLeft animated" data-wow-delay="100ms"
                data-wow-duration="2000ms">
                <img class="float-bob-x"<?php echo get_template_directory_uri(); ?>/assets/ images/breadcrumb/breadcrumb-img1.png" alt="">
            </div>
            <div class="shape1 wow fadeInDown animated" data-wow-delay="100ms" data-wow-duration="5000ms">
                <img class="float-bob-y"<?php echo get_template_directory_uri(); ?>/assets/ images/shapes/breadcrumb-shape1.png" alt="">
            </div>
            <div class="shape2 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="5000ms">
                <img class="float-bob-y"<?php echo get_template_directory_uri(); ?>/assets/ images/shapes/breadcrumb-shape2.png" alt="">
            </div>
            <div class="shape3">
                <img class="float-bob-x"<?php echo get_template_directory_uri(); ?>/assets/ images/shapes/breadcrumb-shape3.png" alt="">
            </div>
            <div class="container">
                <div class="inner-content text-center">
                    <div class="title">
                        <h2>Blog Grid</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="index.html"><span class="icon-home"></span> Home</a></li>
                            <li class="active">Blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb Style1-->

        <!--Start Blog Page One-->
        <section class="blog-page-one">
            <div class="container">
                <div class="row">

                    <!--Start Blog Style1 Single-->
                    <?php
$blog_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
if ( $blog_query->have_posts() ) :
    while ( $blog_query->have_posts() ) : $blog_query->the_post();
?>
<!--Start Blog Style1 Single-->
<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="blog-style1__single">
        <div class="blog-style1__single-img">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-v1-1.jpg" alt="#">
            <?php endif; ?>
        </div>
        <div class="blog-style1__single-content">
            <ul class="meta-info">
                <li><a href="#"><?php the_author(); ?></a></li>
                <li>/</li>
                <li><a href="#"><?php echo get_the_date(); ?></a></li>
            </ul>
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
            <div class="btn-box">
                <a class="btn-one" href="<?php the_permalink(); ?>">
                    <span class="txt">Read more</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End Blog Style1 Single-->
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>Koi blog post abhi tak nahi likha gaya.</p>';
endif;
?>
<!--End Blog Style1 Single-->

                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <ul class="styled-pagination clearfix">
                            <li class="arrow prev">
                                <a href="#">
                                    <span class="icon-left left"></span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="arrow next">
                                <a href="#">
                                    <span class="icon-right right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!--End Blog Page One-->



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
