<!-- all posts -->
<!-- Home page -->
<?php get_header(); ?>

    <!-- THIS THE CATEGORY BLOG TEMPLATE -->

    <section class="page-wrap">
        <div class="container">
        <h1 class="text-center"><?php echo single_cat_title() ?></h1>
            <!-- include folder using 2 params-->
            <?php get_template_part('includes/section', 'archive'); ?>
            <!-- pagination NOT WORKING -->
            <?php previous_posts_link(); ?>
            <?php previous_posts_link(); ?>
            
        </div>
    </section>

<?php get_footer(); ?>
