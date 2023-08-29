<!-- Home page -->
<?php get_header(); ?>

    <div class="container">
        <h1><?php the_title(); ?></h1>

        <!-- include folder using 2 params-->
        <?php get_template_part('includes/section', 'content'); ?>
    </div>

<?php get_footer(); ?>