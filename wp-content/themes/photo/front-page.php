<?php

get_header(); ?>
    <section class="background">
        <div class="container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->



            <?php endwhile; ?>

                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>


<!--         get_template_part(); -->

        </div>
    </section>
<?php get_footer(); ?>