<?php
/*
Template Name: standard

*/
?>

<?php get_header() ?>

<div class="s-content content">
            <main class="row content__page">
            <?php 

    if(have_posts()) :
      while(have_posts()) :
        the_post();
  ?>
                    <?php get_template_part('format-standard') ?>
                    <?php endwhile ?>
                    <?php endif ?>
            </main>

        </div> <!-- end s-content -->

<?php get_footer() ?>