<?php
/*
Template Name: All Movies
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card h-100">
                        <h2 class="card-header text-center"><?php the_title(); ?></h2>
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php

        $args = array(
            'post_type' => 'movie'
        );

        $allMovies = new WP_Query($args);

     ?>


    <div class="row">

    </div>
</div>

<?php get_footer(); ?>
