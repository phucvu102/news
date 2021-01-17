<?php get_header(); ?>
<section class="kun-body">
	<section class="panel-main">
		<section class="category-grid">
			<?php 
				$args = array(
					'post_type' => 'post', // page, post, product
				);
				$wp_query = new WP_Query($args);
			?>
			<header>
				<h3><a href="#">Tin tức</a></h3>
				<!--
				<ul class="sub">
					<li><a href="#"><i class="fa fa-caret-right"></i>Thị Trường 24H</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Thị Trường 24H</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i>Thị Trường 24H</a></li>
				</ul>
				-->
			</header>
			<ul class="grid">
				<?php 
					if($wp_query->have_posts()) {
						while($wp_query->have_posts()) {
						$wp_query->the_post(); // xác định những vài viết đã lấy
					?>
							<li>
								<figure>
									<?php echo get_the_post_thumbnail( get_the_id(), 'full' );  ?>
								</figure>
								<h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
								<p class="info">
									<span class="published">
										<i class="fa fa-calendar"></i>
										<?php the_date(); ?>
									</span>
								</p>
							</li>
					<?php } ?>
				<?php } ?>
			</ul>
			<section class="clear"></section>
		</section><!-- .category-grid -->
	</section><!-- .panel-main -->
	<?php get_sidebar() ?>						
	<section class="clear"></section>
</section><!-- .kun-body -->
<?php get_footer(); ?>