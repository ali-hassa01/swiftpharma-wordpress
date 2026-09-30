<?php get_header(); ?>

<div class="container" style="padding: 60px 20px;">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>