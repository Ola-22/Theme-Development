<?php
/*
Template Name: styles

*/
?>

<?php get_header() ?>

<div class="s-content content">
            <main class="row s-styles">
            <?php 

    if(have_posts()) :
      while(have_posts()) :
        the_post();
  ?>
                    <?php get_template_part('section-styles') ?>
                    <?php endwhile ?>
                    <?php endif ?>
            </main>

        </div> <!-- end s-content -->

<?php get_footer() ?>