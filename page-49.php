<?php get_header(); ?>

<div class="container-fluid">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
            <div class="card mb-2 mt-2">
                <div class="card-body">
                <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
