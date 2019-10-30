<?php
/*
Template Name: Contact Form
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="card mt-3 mb-3">
        <h5 class="card-header"><?php the_title(); ?></h5>
        <div class="card-body w-80">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address...</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Add your message here...</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
