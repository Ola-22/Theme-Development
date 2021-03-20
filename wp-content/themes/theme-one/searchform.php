    
<form role="search" method="get" class="header__search-form" action="<?php home_url() ?>">
    <label>
        <span class="hide-content">Search for:</span>
            <input type="search" class="header__search-field" placeholder="Type Keywords" value="<?= esc_attr(get_search_query()) ?>" name="s" title="Search for:" autocomplete="off">
    </label>
            <input type="submit" class="header__search-submit" value="Search">
</form>


    

