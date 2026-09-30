<?php get_header(); ?>
<section class="error-page full-height">
            <div class="error-page__bg" style="background-image: url(assets/images/backgrounds/error-page-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-content text-center">
                            <div class="big-title wow fadeInDown animated" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <h2>404</h2>
                            </div>
                            <div class="title wow fadeInDown animated" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <h2>Oops! That page can’t be found</h2>
                            </div>
                            <div class="text">
                                <p>Sorry, but the page you are looking for does not existing</p>
                            </div>
                            <div class="error-page-search-box text-center">
                                <form class="search-form" action="#">
                                    <input placeholder="Search ..." type="text">
                                    <button type="submit">
                                        <i class="icon-search-interface-symbol"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="btns-box wow slideInUp animated" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <a class="btn-one" href="<?php echo home_url(); ?>">
                                    <span class="txt">Go to home page</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>