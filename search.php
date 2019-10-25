<?php
    /*
    Template Name: Search Results
    */
?>

<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card my-2">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="card-body">
                            <div class="row">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php if( is_home() || is_search() || is_archive() ): ?>
                                        <div class="col-12 col-md-3">
                                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-12 text-center mb-5">
                                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <div class="col">
                                    <div>
                                        <?php if( is_home() ): ?>
                                            <?php the_excerpt() ; ?>
                                        <?php else: ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if( !is_singular() || !is_search() || !is_archive() ): ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
