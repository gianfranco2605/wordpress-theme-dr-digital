<!-- single post --><!-- Home page -->
<?php get_header(); ?>


<section class="page-wrap">
    <div class="container">
        <!-- image rememeber first in the function add theme support and then in the file -->

        <?php if( has_post_thumbnail() ): ?>

            <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="thumbnail" class="img-fluid mb-3 img-thumbnail" />

        <?php endif; ?>    
        <h1><?php the_title(); ?></h1>

        <!-- include folder using 2 params-->
        <?php get_template_part('includes/section', 'blogcontent'); ?>
        
    </div>
</section>



<?php get_footer(); ?>
