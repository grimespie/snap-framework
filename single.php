<?php get_header(); ?>

    <div id="template-single">

        <?php while(have_posts()) : the_post(); ?>
            
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

    </div>

<?php get_footer(); ?>