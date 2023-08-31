

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        
        the_content();?>
        
        <p class="text-muted"><?php the_time('M j, Y'); ?> | by <?php the_author(); ?> </p>

        
        <!-- link page breaks -->
        <div class="text-center"><?php wp_link_pages() ?><div>

        <?php
        $tags = get_the_tags();
        foreach($tags as $tag):?>

            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">

                <?php echo $tag->name; ?>

            </a>

        <?php endforeach ?>

        <?php
        $categories = get_the_category();
        foreach($categories as $cat): ?>


        <a href="<?php echo get_category_link($cat->term_id) ?>" class="badge badge-primary">
            <?php echo $cat->name; ?>
        </a>

        <?php endforeach ?>

        <!-- comments -->

        <?php comments_template() ?>

        <?php
    }
} else {
    // Code for handling no posts found
}
?>



