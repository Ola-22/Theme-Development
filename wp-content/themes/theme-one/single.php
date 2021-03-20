<?php get_header() ?>

        <div class="s-content">
        <p style="margin-left:25px !important; font-size:25px; font-weight:bold"> single.php</p>
            <div class="masonry-wrap">
                <div class="masonry">
                    <div class="grid-sizer"></div>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>
                    <article class="masonry__brick entry format-standard animate-this">
                                <div class="entry__thumb">
                                    <a href="<?php the_permalink() ?>" class="entry__thumb-link">
                                        <?php the_post_thumbnail('mytheme-thumbnail') ?>
                                    </a>
                                </div>
                                
                                <div class="entry__text">
                                    <div class="entry__header">
            
                                        <h2 class="entry__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                        <div class="entry__meta">
                                                <?php the_category(', ') ?>
                                            <?= get_the_date() ?>
                                        </div>
                                    </div>
                                    <div class="entry__excerpt">
                                    <?php
                                            the_content();
                                        ?>
                                    </div>
                                </div>
        
                    </article> <!-- end article -->
                    <?php endwhile ?>
                        <?php endif ?>
                </div> <!-- end masonry -->
            </div> <!-- end masonry-wrap -->
        </div> <!-- end s-content -->


<?php get_footer() ?>