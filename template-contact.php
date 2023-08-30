<!-- Wordpress read the comment Template Name -->
<?php
/**
 * Template Name: Contact Us
*/
?>
<?php get_header(); ?>


<section class="page-wrap">
    <div class="container">

    <h1><?php the_title(); ?></h1>

    <div class="row">

        <div class="col-lg-6">

            <h2>1 Section Form</h2>
            
        </div>

        <div class="col-lg-6">
            
            <?php get_template_part('includes/section', 'content'); ?>

        </div>

    </div>

    </div>
</section>

<?php get_footer(); ?>