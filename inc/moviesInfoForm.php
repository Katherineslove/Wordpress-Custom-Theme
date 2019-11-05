<div class="">
    <label for="">Year Released</label>
    <input type="number" min="0" max="9999" name="1902_year" value="<?php echo get_post_meta(get_the_ID(), '1902_year', true) ?>">
</div>

<div class="">
    <label for="">Movie Director</label>
    <input type="text" name="1902_director" value="<?php echo get_post_meta(get_the_ID(), '1902_director', true) ?>">
</div>

<div class="">
    <label for="">Series</label>
    <input type="radio" name="1902_category" value="<?php echo get_post_meta(get_the_ID(), '1902_category', true) ?>"> Yes
    <input type="radio" name="1902_category" value="<?php echo get_post_meta(get_the_ID(), '1902_category', true) ?>"> No
</div>
