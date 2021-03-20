<article class="masonry__brick entry format-video animate-this">
                            
                            <div class="entry__thumb video-image">
                                <a href="https://player.vimeo.com/video/117310401?color=339989&title=0&byline=0&portrait=0" data-lity class="entry__thumb-link">
                                <?php the_post_thumbnail('mytheme-thumbnail') ?></a>
                            </div>
            
                            <div class="entry__text">
                                <div class="entry__header">
                                    <h2 class="entry__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                    <div class="entry__meta">
                                        <span class="entry__meta-cat">
                                        <?php the_category(', ') ?>
                                        </span>
                                        <span class="entry__meta-date">
                                        <?= get_the_date() ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                    <?php the_excerpt() ?>
                                    </p>
                                </div>
                            </div>
            
                        </article> <!-- end article -->