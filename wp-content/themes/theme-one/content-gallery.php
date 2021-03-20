<article class="masonry__brick entry format-gallery animate-this">
                            
                            <div class="entry__thumb slider">
                                <div class="slider__slides">
                                    <?php the_post_thumbnail('mytheme-thumbnail') ?> 
                                    <?php the_post_thumbnail('mytheme-thumbnail') ?>   
                                    <?php the_post_thumbnail('mytheme-thumbnail') ?>       
                                </div>
                            </div>
            
                            <div class="entry__text">
                                <div class="entry__header">
                                    <h2 class="entry__title"><a href="single-gallery.html"><?php the_title() ?></a></h2>
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