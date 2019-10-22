<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="container">
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post(); ?>
                <div class="card mt-3 shadow">
                    <h5 class="card-header"><?php the_title(); ?></h5>
                        <?php if(is_home()): ?>
                            <div class="card-body d-flex justify-contwnt-between">
                        <?php elseif(!is_home()):?>
                            <div class="card-body">
                        <?php endif; ?>
                        <div class="mr-3">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                        </div>
                        <div>
                            <?php if(is_home()): ?>
                                <?php the_excerpt() ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                            <?php else:?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
