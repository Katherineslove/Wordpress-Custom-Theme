<?php
    /*
        Template Name: Search Bar
        Template Post Type: page
    */
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
     <meta charset="utf-8">
     <title></title>
     <?php wp_head(); ?>
 </head>
 <body>

<?php if(has_nav_menu( 'top_navigation' )): ?>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
     <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="#"><?php echo get_bloginfo('name'); ?></a>
         <?php
         wp_nav_menu( array(
             'theme_location'    => 'top_navigation',
             'depth'             => 2,
             'container'         => 'div',
             'container_class'   => 'collapse navbar-collapse',
             'container_id'      => 'top_navigation',
             'menu_class'        => 'nav navbar-nav',
             'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
             'walker'            => new WP_Bootstrap_Navwalker(),
         ) );
         ?>
         <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
     </div>
 </nav>
<?php endif; ?>


<div class="container-fluid">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
            <div class="card mt-3 mb-3">
                <h5 class="card-header"><?php the_title(); ?></h5>
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
