<?php
/*
Template Name: Video Template
Template Post Type: post
*/
?>

<?php get_header(); ?>

<?php

$args = array(
    'post_type' => 'video'
);

$videoPosts = new WP_Query($args);

?>

<?php if($videoPosts->have_posts() ): ?>
    <div class="container py-5">
        <div class="row">
            <?php while($videoPosts->have_posts() ): $videoPosts->the_post(); ?>
                <div class="col-12">
                    <div class="card mt-3 shadow mb-4">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="p-4 d-flex justify-content-center">
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                            <?php else:?>
                                <?php the_content(); ?>
                                <p>Youtube Link: <?php echo get_post_meta(get_the_ID(), '1902_videoLink', true); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
<?php endif; ?>

<?php get_footer(); ?>
