<?php
    // Template Name: Product
 ?>
<?php get_header(); ?>
<section class="kun-body">
	<section class="panel-main">
		<section class="detail">
            <?php 
                 if (!function_exists( 'woo_post_meta')) {
                    function woo_post_meta( ) {
                        global $woo_options;
                        global $post;

                        $terms = get_the_terms( $post->ID, 'product_cat' );
                        foreach ($terms as $term) {
                            $product_cat = $term->name;
                            break;
                        }

                ?>
            ?>
		</section><!-- .detail -->
	</section><!-- .panel-main -->
	<section class="clear"></section>
</section><!-- .kun-body -->
<?php get_footer(); ?>