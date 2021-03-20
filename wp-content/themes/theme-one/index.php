<?php get_header() ?>
        <div class="s-content">
            <div class="masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    <?php 
                    $ourCurrentPage = get_query_var('paged');
                    $post_loop = new WP_Query([
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'posts_per_pege' => 5,
                    'paged' => $ourCurrentPage
                    ]);
                    if ($post_loop->have_posts()) :
                        while ($post_loop->have_posts()) :
                            $post_loop->the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                            <?php 
                    endwhile;
                    wp_reset_postdata();
                endif;
                      
                    ?>
                </div> <!-- end masonry -->
            </div> <!-- end masonry-wrap -->


            <div class="row">
                <div class="column large-full">
                    <nav class="pgn">
                     <?php
                    the_posts_pagination( [
                        'mid_size'  => 10,
                        'prev_text' => '<i class="fa fa-arrow-left"> « </i>' ,
                        'next_text' => ' »',
                       'screen_reader_text' => ' '
                    ]) ;

                  ?>
                    </nav>
                </div>
            </div>

        </div> <!-- end s-content -->


<?php get_footer() ?>