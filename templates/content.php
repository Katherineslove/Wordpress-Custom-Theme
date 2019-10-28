<div class="card h-100 border border-primary">
    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Read More</a>
    </div>
</div>
