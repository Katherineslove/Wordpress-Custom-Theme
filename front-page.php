<?php get_header(); ?>

<?php if (has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
            <h1 class="display-3 headerText"><?php echo get_bloginfo('name'); ?></h1>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 headerText"><?php echo get_bloginfo('name') ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if( have_posts() ): ?>
    <div class="container py-5">
        <div class="row">
            <?php while( have_posts() ): the_post(); ?>
                <?php if (get_theme_mod('1902_gridLayoutSetting') === 'grid'): ?>
                    <div class="col-12 col-md-4 mb-3">
                        <?php get_template_part('templates/content', get_post_format()); ?>
                    </div>
                <?php elseif (get_theme_mod('1902_gridLayoutSetting') === 'rows'):?>
                    <div class="col-12 mt-3">
                        <?php get_template_part('templates/contentRows', get_post_format()); ?>
                    </div>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
        <?php
        $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish;

        $default_posts_per_page = get_option('posts_per_page');
        ?>

        <?php if ($published_posts > $default_posts_per_page): ?>
            <?php
            $args = array(
                'type' => 'array'
            );
            $paginationLinks = paginate_links($args);
            ?>

            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center mt-4">
                    <?php foreach ($paginationLinks as $link): ?>
                        <li class="page-item">
                            <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>

    <?php if (get_theme_mod('1902_imageDisplay')): ?>
        <div class="row">
            <img src="<?php echo get_theme_mod('1902_imageDisplay');  ?>" alt="" class="displayImage p-0">
            <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
        </div>
    <?php endif; ?>

<?php endif; ?>

<?php get_footer(); ?>
