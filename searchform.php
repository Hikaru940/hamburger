<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="p-form">
                <input type="search" class="c-search" name="s" id="s" value="<?php the_search_query() ?>">
                <input type="submit" value="検索" class="c-submit">
            </form>