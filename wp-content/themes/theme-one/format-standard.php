
<article class="column large-full entry format-gallery">

<div class="content__page-header entry__header">
    <h1 class="display-1 entry__title">
    <?php the_title() ?>
    </h1>
    <ul class="entry__header-meta">

    </ul>
</div> <!-- end entry__header -->

<div class="entry__content">

    <p class="lead drop-cap">
    <?php the_content() ?>
</div> <!-- end entry content -->
<div class="entry__pagenav">
    <div class="entry__nav">
        <div class="entry__prev">
            <a href="#0" rel="prev">
            <div><?= get_previous_post_link('Previous Post') ?></div>
            </a>
        </div>
        <div class="entry__next">
        <a href="#0" rel="next">
            <div><?= get_next_post_link('Next Post') ?></div>
            </a>
        </div>
    </div>
</div> <!-- end entry content -->

</article> <!-- end column large-full entry-->



<?php comments_template() ?>
    <!-- END respond-->


</div> <!-- end s-content -->
