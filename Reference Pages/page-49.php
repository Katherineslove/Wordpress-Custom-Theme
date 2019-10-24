<?php get_header(); ?>

<div class="container-fluid">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
