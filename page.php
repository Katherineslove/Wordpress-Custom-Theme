<?php get_header(); ?>

<div class="container mt-3">
    <div class="row">

        <?php if (has_post_thumbnail()): ?>
            <div class="col-4">
                <div class="card mt-3 shadow mb-4">
                    <?php if(is_home()): ?>
                        <div class="card-body d-flex justify-contwnt-between">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                        </div>
                    <?php elseif(!is_home()):?>
                        <div class="card-body">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php while( have_posts() ): the_post(); ?>
                <div class="col-8">
                    <div class="card mt-3 shadow mb-4">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="px-4 d-flex justify-content-around flex-column mt-4">
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="mt-4 btn btn-outline-primary mb-3">More</a>
                            <?php else:?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php elseif (!has_post_thumbnail()): ?>
            <?php while( have_posts() ): the_post(); ?>
                <div class="col-12">
                    <div class="card mt-3 shadow mb-4">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="px-4 d-flex justify-content-around flex-column mt-4">
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="mt-4 btn btn-outline-primary mb-3">More</a>
                            <?php else:?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
