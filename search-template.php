<?php
    /*
    Template Name: Search Bar
    */
?>

<?php get_header(); ?>

<div class="container">
    <form action="<?php echo home_url();?>" method="get">
        <div class="form-group">
            <label for="">Search for Posts</label>
            <input type="hidden" name="post_type" value="post"></input>
                <input name="s" type="text" class="form-control" aria-describedby="searchPosts" placeholder="Search Posts" value="<?php the_search_query(); ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <div class="row">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
