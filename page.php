<?php   
    
    while(have_posts()) {
        the_post(); ?>
        <h1>This is a page</h1>
        <h2><?php the_title(); ?></a></h2>
        <p><?php the_content(); ?></p>
        <hr>
    <?php }

    ?>