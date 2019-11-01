<?php get_header(); ?>

<div class="container mt-3">
    <div class="row">
        <?php if(has_nav_menu('side_navigation')): ?>
            <?php if (get_theme_mod('1902_sideNavDisplay') === 'left'): ?>
                <div class="col-3">
                    <div class="card h-80 mb-2 mt-2 p-2">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'side_navigation',
                            'menu_class' => 'list-group list-group-flush',
                            'container' => '',
                            'menu_id' => 'sideNav'
                        )); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

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
                <div class="col-4">
                    <div class="card mt-3 shadow mb-4">
                        <h5 class="card-title text-center"><?php the_title(); ?></h5>
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

        <?php endif; ?>

        <?php if (get_theme_mod('1902_sideNavDisplay') === 'right'): ?>
            <div class="col-3">
                <div class="card h-80 mb-2 mt-2 p-2">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
