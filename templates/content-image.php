<div class="card h-100 border border-info">
    <div class="card-body">
        <h5 class="card-title text-center"><?php the_title(); ?></h5>
        <div class="">
            <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Image</a>
    </div>
</div>
