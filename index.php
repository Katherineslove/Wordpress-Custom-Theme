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
                    <div class="card mt-3 border">
                        <h5 class="card-header"><?php the_title(); ?></h5>
                          <div class="card-body">

                                <?php if ( is_home() ): ?>

                                    <div class="row">
                                        <div class="col-4">
                                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                        </div>
                                        <div class="col-8">
                                            <?php if ( is_home() ):?>
                                                <?php the_excerpt(); ?>
                                            <?php else: ?>
                                                <?php the_content(); ?>
                                            <?php endif; ?>

                                            <?php if (!is_single() ): ?>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go Somewhere</a>
                                            <?php endif; ?>
                                        </div>
                                        
                                <?php else: ?>

                                    <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                    <?php if ( is_home() ):?>
                                        <?php the_excerpt(); ?>
                                    <?php else: ?>
                                        <br><br>
                                        <?php the_content(); ?>
                                    <?php endif; ?>
                                    <?php if (!is_single() ): ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go Somewhere</a>
                                    <?php endif; ?>

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
