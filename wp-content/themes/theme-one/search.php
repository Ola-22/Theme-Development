<?php get_header() ?>

        <div class="s-content">
            <p style="margin-left:25px !important; font-size:25px; font-weight:bold">search Result: "<?= esc_html(get_search_query()) ?> "</p>
            <div class="masonry-wrap">
            <div class="masonry">
                    <div class="grid-sizer"></div>
                    <?php
      if(have_posts()) :
        while(have_posts()) :
            the_post();
      ?>
      <?php get_template_part('content') ?>
      <?php endwhile ?>
      <?php endif ?>
                </div> <!-- end masonry -->
            </div> <!-- end masonry-wrap -->
        </div> <!-- end s-content -->
<?php get_footer() ?>