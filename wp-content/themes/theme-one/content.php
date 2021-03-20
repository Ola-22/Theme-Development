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
                                if (is_single() || is_page()) {
                                    the_content();
                                } else {
                                    the_excerpt();
                                }
                                ?>
                            </div>
                        </div>
                    </article> <!-- end article -->