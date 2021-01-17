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
                    <section class="kun-content">
                      <?php the_content(); ?>
                    </section>
                    <section class="clear"></section>
                <?php } ?>
            <?php } ?>
		</section><!-- .detail -->
	</section><!-- .panel-main -->
    <?php get_sidebar() ?>	
	<section class="clear"></section>
</section><!-- .kun-body -->
<?php get_footer(); ?>