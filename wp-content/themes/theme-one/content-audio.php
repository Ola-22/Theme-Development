<article class="masonry__brick entry format-audio animate-this">
    
    <div class="entry__thumb">
        <a href="<?php the_permalink() ?>" class="entry__thumb-link">
        <?php the_post_thumbnail('mytheme-thumbnail') ?>
        </a>
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