<?php
if (have_posts()) {
    echo '<div class="row justify-content-center">'; // Center the row

    while (have_posts()) {
        the_post();
        ?>

        <div class="col-md-4">
            <div class="card d-flex justify-content-center align-items-center mb-5"> <!-- Center the card content -->
                <div class="card-body shadow text-center"> <!-- Center the card body content -->
                    <?php if( has_post_thumbnail() ): ?>

                       <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="thumbnail" class="img-fluid mb-3 img-thumbnail" />

                    <?php endif; ?>
                    <h2><?php the_title() ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
        
        <?php
    }

    echo '</div>'; // Close the row
} else {
    // Code for handling no posts found
}
?>
