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

    <?php if ( $allMovies->have_posts()): ?>
        <div class="row d-flex justify-content-center">
            <?php while( $allMovies->have_posts() ): $allMovies->the_post(); ?>
                <div class="col-12 col-sm-3">
                    <div class="card p-3">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>


    <div class="row">

    </div>
</div>

<?php get_footer(); ?>
