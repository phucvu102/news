<?php get_header() ?>;
    <?php
        $search_query = new WP_Query( 's='.$s.'&showposts=-1' );
        $search_keyword = wp_specialchars( $s, 1);
        $search_count = $search_query->post_count;
        // var_dump( $search_query );
        printf( __('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'w5d'), $search_keyword, $search_count );
    ?>
<?php get_footer() ?>;