<footer>
        <div class="container">
            <?php 
                wp_nav_menu(

                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-bar'
                    )
                )
            ?>
        </div>
</footer>

<!-- admin bar -->
    <?php wp_footer(); ?> 
    </body>
</html>