<?php get_header(); ?>
<section class="kun-body">
	<section class="panel-main">
		<section class="breadcrumb">
			<ul>
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a rel="nofollow" href="." title="Trang chủ" itemprop="url"><span itemprop="title">Trang chủ</span></a></li>
				<li class="spacebar">&raquo;</li>
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><h1><a href="tin-tuc.html" title="Tin tức" itemprop="url"><span itemprop="title">Tin tức</span></a></h1></li>
			</ul>
		</section><!-- .breadcrumb -->
		<section class="detail">
            <?php if(have_posts()) { 
                while(have_posts()) {
                    the_post();
            ?>

                    <header><h1><?php the_title(); ?></h1></header>
                    <figure class="image-thumb"><img src="<?php echo get_template_directory_uri(); ?>/uploads/239_copy.jpg" /></figure>
                    <section class="kun-info">
                        <span class="published">
                            <i class="fa fa-calendar"></i>
                            <?php the_date(); ?>
                        </span>
                    </section>
                    <section class="kun-social-top kun-social">
                        <div class="button"><div class="fb-like" data-href="http://sotay.info/mot-so-layouts-html5-de-ban-co-the-tham-khao-a482.html" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></div>
                        <div class="button"><div class="fb-share-button" data-href="http://sotay.info/mot-so-layouts-html5-de-ban-co-the-tham-khao-a482.html" data-type="button_count"></div></div>
                        <div class="button"><div class="g-plus" data-action="share" data-annotation="bubble"></div></div>
                        <div class="button"><div class="g-plusone" data-size="medium"></div></div>
                        <div class="clear"></div>
                    </section><!-- .kun-social -->
                    <section class="kun-description"><?php the_excerpt()?></section>
                    <section class="kun-content">
                      <?php the_content(); ?>
                    </section>
                    <footer>
                        <section class="kun-social">
                            <div class="button"><div class="fb-like" data-href="http://sotay.info/mot-so-layouts-html5-de-ban-co-the-tham-khao-a482.html" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></div>
                            <div class="button"><div class="fb-share-button" data-href="http://sotay.info/mot-so-layouts-html5-de-ban-co-the-tham-khao-a482.html" data-type="button_count"></div></div>
                            <div class="button"><div class="g-plus" data-action="share" data-annotation="bubble"></div></div>
                            <div class="button"><div class="g-plusone" data-size="medium"></div></div>
                            <div class="clear"></div>
                        </section><!-- .kun-social -->
                        <section class="tags">
                            <ul>
                                <li><a href="#">Video Anh - Uruguay</a></li>
                                <li><a href="#">Anh vs Uruguay</a></li>
                                <li><a href="#">Rooney</a></li>
                                <li><a href="#">lich thi dau world cup</a></li>
                                <li><a href="#">lich thi dau world cup 2014</a></li>
                                <li><a href="#">world cup 2014</a></li>
                                <li><a href="#">world cup, bong da</a></li>
                                <li><a href="#">bongda</a></li>
                                <li><a href="#">bóng đá</a></li>
                                <li><a href="#">ket qua bong da</a></li>
                                <li><a href="#">bong da 24h</a></li>
                                <li><a href="#">bao</a></li>
                                <li><a href="#">tin tuc</a></li>
                                <li><a href="#">tin tuc 24h</a></li>
                            </ul>
                        </section><!-- .tags -->
                        <section class="comment-social">
                            <div class="fb-comments" data-href="http://sotay.info/ngoai-30-tuoi-toi-co-the-khoi-nghiep-duoc-khong-a509.html" data-numposts="5" data-width="100%" data-colorscheme="light"></div>
                        </section><!-- .comment-social -->
                    </footer>
                    <section class="clear"></section>
                <?php } ?>
            <?php } ?>
		</section><!-- .detail -->
		<section class="category-grid">
			<header>
				<h3><a href="#">Thị Trường 24H</a></h3>
			</header>
			<ul class="grid">
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/133_copy.jpg" /></figure>
					<h4><a href="#">Vì bản năng của phụ nữ là tò mò...</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/239_copy.jpg" /></figure>
					<h4><a href="#">"Châm ngòi nổ" doanh thu bán hàng chỉ bằng một nụ hôn ngọt ngào</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/149_copy.png" /></figure>
					<h4><a href="#">Phân biệt 4 loại kênh truyền thông cơ bản</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/133_copy.jpg" /></figure>
					<h4><a href="#">Vì bản năng của phụ nữ là tò mò...</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/239_copy.jpg" /></figure>
					<h4><a href="#">"Châm ngòi nổ" doanh thu bán hàng chỉ bằng một nụ hôn ngọt ngào</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
				<li>
					<figure><img src="<?php echo get_template_directory_uri(); ?>/uploads/149_copy.png" /></figure>
					<h4><a href="#">Phân biệt 4 loại kênh truyền thông cơ bản</a></h4>
					<p class="info">
						<span class="published">
							<i class="fa fa-calendar"></i>
							Thứ năm, 08 Tháng 5 2014
						</span>
					</p>
				</li>
			</ul>
			<footer><a href="#">Xem tiếp...</a></footer>
			<section class="clear"></section>
		</section><!-- .category-grid -->
	</section><!-- .panel-main -->
    <?php get_sidebar() ?>	
	<section class="clear"></section>
</section><!-- .kun-body -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=214678972067158";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
window.___gcfg = {lang: 'vi'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/platform.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<?php get_footer(); ?>