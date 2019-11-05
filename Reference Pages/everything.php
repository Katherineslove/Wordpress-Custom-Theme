<div class="card h-100">
    <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
    <div class="card-body">

        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>

        <?php if(has_post_format('video')): ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-block">Watch Video</a>
        <?php elseif(has_post_format('audio')): ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-success btn-block">Listen Here</a>
        <?php elseif(has_post_format('image')): ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Image</a>
        <?php elseif(has_post_format('gallery')): ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">View Gallery</a>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Read More</a>
        <?php endif; ?>

    </div>
</div>
