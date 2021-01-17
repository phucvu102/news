<aside class="panel-sidebar">
    <section class="quote">
        <h4><?php the_date() ; ?></h4>
        <p><i class="fa fa-quote-left fa-1"></i><?php the_title() ; ?><i class="fa fa-quote-right fa-1"></i></p>
    </section><!-- .quote -->
    <section class="category">
        <header>
            <h3><a href="#">Tin mới</a></h3>
        </header>
        <ul>
            <li>
                <?php 
                    if($wp_query->have_posts()) {
                        while($wp_query->have_posts()) {
                        $wp_query->the_post(); // xác định những vài viết đã lấy
                    ?>
                        <figure><?php echo get_the_post_thumbnail( get_the_id(), 'full' );  ?></figure>
                        <h4><a href="#"><?php the_title() ; ?></a></h4>
                    <?php } ?>
				<?php } ?>
            </li>
        </ul>
        <section class="clear"></section>
    </section><!-- .category -->
    <section class="comment">
        <header>
            <h3>Ý kiến phản hồi</h3>
        </header>
        <ul>
            <li>
                <p class="author">
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/fb6d411c852a5b23ba110c5853d0ce0c.png"/>
                    <span>Thanh Hải</span>
                    <i></i>
                </p>
                <p class="comment">Tôi khâm phục ý chí và tầm nhìn chiến lược của anh.</p>
                <p class="link"><a href="#">CEO Mai Nguyên: 10 năm, 3 lần ...</a></p>
            </li>
            <li>
                <p class="author">
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/fb6d411c852a5b23ba110c5853d0ce0c.png"/>
                    <span>Thanh Hải</span>
                    <i></i>
                </p>
                <p class="comment">Tôi khâm phục ý chí và tầm nhìn chiến lược của anh.</p>
                <p class="link"><a href="#">CEO Mai Nguyên: 10 năm, 3 lần ...</a></p>
            </li>
            <li>
                <p class="author">
                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/fb6d411c852a5b23ba110c5853d0ce0c.png"/>
                    <span>Thanh Hải</span>
                    <i></i>
                </p>
                <p class="comment">Tôi khâm phục ý chí và tầm nhìn chiến lược của anh.</p>
                <p class="link"><a href="#">CEO Mai Nguyên: 10 năm, 3 lần ...</a></p>
            </li>
        </ul>
        <section class="clear"></section>
    </section><!-- .category -->
</aside><!-- .panel-sidebar -->