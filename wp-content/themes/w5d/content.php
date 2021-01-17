<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
                        <?php w5d_thumbnail('thumbnail'); ?>
        </div>
        <header class="entry-header">
                        <?php w5d_entry_header(); ?>
                        <?php w5d_entry_meta() ?>
        </header>
                <div class="entry-content">
                        <?php w5d_entry_content(); ?>
                        <?php ( is_single() ? w5d_entry_tag() : '' ); ?>
                </div>
</article>