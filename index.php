<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>


    <?php
        if (has_nav_menu('top_navigation')): ?>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">19WDWU02 WORDPRESS</a>
            <?php wp_nav_menu( array(
                'theme_location'    => 'top_navigation',
                'menu_class'        => 'top_menu_class',
                'menu_id'           => 'top_menu_id',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <div class="row dark">
          <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
          </div>
        </div>
    <?php endif; ?>


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
                            <?php the_post_thumbnail("large", ["class" => "img-fluid"]); ?>
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
