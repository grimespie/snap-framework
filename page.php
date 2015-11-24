<?php get_header(); ?>

    <div id="template-page">

        <?php while(have_posts()) : the_post(); ?>


        <?php endwhile; ?>

    </div>

<?php get_footer(); ?>