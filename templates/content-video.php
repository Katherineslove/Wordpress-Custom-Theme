<?php
    if (has_blocks()) {
        $allBlocks = parse_blocks(get_the_content());
        for ($i=0; $i < count($allBlocks); $i++) {

            echo "Block number " . $i . " is a " . $allBlocks[$i]['blockName'];

            echo "<br>";

            if ($allBlocks[$i]['blockName'] == 'core-embed/youtube') {
                // code...
            }

            // echo "<pre>";
            //     print_r($allBlocks[$i]);
            // echo "</pre>";
        }
        die();
    };
 ?>


<div class="card h-100 border border-warning">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-warning btn-block">Watch Video</a>
    </div>
</div>
