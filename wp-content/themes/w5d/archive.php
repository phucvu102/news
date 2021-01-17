<?php get_header() ; ?>
<section class="kun-body">
	<section class="panel-main">
		<section class="breadcrumb">
			<ul>
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a rel="nofollow" href="." title="Trang chủ" itemprop="url"><span itemprop="title">Trang chủ</span></a></li>
				<li class="spacebar">&raquo;</li>
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><h1><a href="tin-tuc.html" title="Tin tức" itemprop="url"><span itemprop="title">Tin tức</span></a></h1></li>
			</ul>
		</section><!-- .breadcrumb -->
		<section class="category-list">
			<section class="kun-navigation"><p><a title="cach dan khan , cach dan khan len" href="/bai-viet/cach-dan-khan-len-c9.html">Cách đan khăn &nbsp;len</a>, hướng dẫn cách đan khăn len từ đơn giản đến phức tạp,giới thiệu những <a title="cach dan khan, cách đan khăn" href="/bai-viet/cach-dan-khan-len-c9.html">cách đan khăn</a> và những mẫu khăn đẹp nhất , mới nhất</p></section>
			<ul class="list">
                <?php if(have_posts()) { 
                    while(have_posts()) {
                        the_post();
                ?>
                        <li>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/133_copy.jpg" /></figure>
                            <h4><a href="#"><?php the_title() ; ?></a></h4>
                            <p class="info">
                                <span class="published">
                                    <i class="fa fa-calendar"></i>
                                    <?php the_date() ; ?>
                                </span>
                            </p>
                            <?php the_content() ; ?>
                        </li>
                        <?php } ?>
                <?php } ?>
			<section class="clear"></section>
		</section><!-- .category-list -->
		<section class="pagination">
			<ul>
				<li class="active">1</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">Tiếp tục</a></li>
				<li><a href="#">Trang cuối</a></li>
			</ul>
		</section><!-- .pagination -->
	</section><!-- .panel-main -->
	<aside class="panel-sidebar">
		<section class="quote">
			<h4>Montesquieu 1722-1755</h4>
			<p>"Lý do khiến người La Mã Cổ đại lát được những con đường vĩ đại là vì chân họ mang những thứ giầy dép không được êm ái lắm"</p>
		</section><!-- .quote -->
		<section class="category">
			<header>
				<h3><a href="#">Truyền Thông Marketing</a></h3>
			</header>
			<ul>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/133_copy.jpg" /></figure>
					<h4><a href="#">Vì bản năng của phụ nữ là tò mò...</a></h4>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/239_copy.jpg" /></figure>
					<h4><a href="#">"Châm ngòi nổ" doanh thu bán hàng chỉ bằng một nụ hôn ngọt ngào</a></h4>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/149_copy.png" /></figure>
					<h4><a href="#">Phân biệt 4 loại kênh truyền thông cơ bản</a></h4>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/133_copy.jpg" /></figure>
					<h4><a href="#">Vì bản năng của phụ nữ là tò mò...</a></h4>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/239_copy.jpg" /></figure>
					<h4><a href="#">"Châm ngòi nổ" doanh thu bán hàng chỉ bằng một nụ hôn ngọt ngào</a></h4>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/149_copy.png" /></figure>
					<h4><a href="#">Phân biệt 4 loại kênh truyền thông cơ bản</a></h4>
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
	<section class="clear"></section>
</section><!-- .kun-body -->
<?php get_footer () ; ?>