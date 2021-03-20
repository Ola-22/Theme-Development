<?php get_header() ?>

        <div class="s-content">
            <p style="margin-left:25px !important; font-size:25px; font-weight:bold"> <?= get_the_archive_title()  ?> </p>
            <div class="masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    
                    <?php 
                    $post_loop = new WP_Query([
                    'order' => 'ASC',
                    ]);
                    if ($post_loop->have_posts()) :
                        while ($post_loop->have_posts()) :
                            $post_loop->the_post();
                    ?>
                    <?php get_template_part('template/content') ?>
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
                        <ul>
                            <li><a class="pgn__prev" href="#0">Prev</a></li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li><a class="pgn__next" href="#0">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div> <!-- end s-content -->


<?php get_footer() ?>