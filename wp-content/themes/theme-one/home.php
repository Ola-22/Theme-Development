
<?php get_header() ?>
        <div class="s-content">
            <div class="masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    <?php 
                   // $currentPage = max( 1, get_query_var( 'paged', 1 ) );
                    $CurrentPage = get_query_var('paged');
                    $post_loop = new WP_Query([
                    'order' => 'ASC',
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

                        'total' => $post_loop->max_num_pages,
                        'current'=> max(1, $CurrentPage),
                        'type' => 'list',
                        'prev_text' => '<i class="fa fa-arrow-left fa-2x"> 🡸  </i>' ,
                        'next_text' => ' 🡺',
                        'show_all' => true,

                    ) );

                  ?>
                    </nav>
                </div>
            </div>

        </div> <!-- end s-content -->


<?php get_footer() ?>