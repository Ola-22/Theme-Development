
<?php get_header() ?>

        <div class="s-content">
            <div class="masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    <?php 
                    $CurrentPage = get_query_var('paged');
                    $post_loop = new WP_Query([
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'posts_per_pege' => 4,
                    'paged' => $CurrentPage
                    ]);
                    if ($post_loop->have_posts()) :
                        while ($post_loop->have_posts()) :
                            $post_loop->the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                    <?php 
                    endwhile;
                    
                endif;
                        wp_reset_postdata();
                    ?>
                </div> <!-- end masonry -->
            </div> <!-- end masonry-wrap -->
            <div class="row">
                <div class="column large-full">
                    <nav class="pgn">
                     <?php
                    // the_posts_pagination( [
                    //     'mid_size'  => 10,
                    //     'prev_text' => '<i class="fa fa-arrow-left fa-2x"> 🡸  </i>' ,
                    //     'next_text' => ' 🡺',
                    //    'screen_reader_text' => ' '
                    // ]) ;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages
                    ) );

                  ?>
                    </nav>
                </div>
            </div>
        </div> <!-- end s-content -->


<?php get_footer() ?>