<div class="card h-100 border border-success">
    <div class="card-body">
        <h5 class="card-title text-center"><?php the_title(); ?></h5>
        <div class="fullAudio">
            <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-block">Listen Here</a>
    </div>
</div>
