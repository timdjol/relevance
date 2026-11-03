<?php get_header(); ?>

<div class="page pagetitle">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><?php single_cat_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="news newspage">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <h1 data-aos="fade-up" data-aos-duration="2000"><?php single_cat_title(); ?></h1>
	        </div>
	    </div>
		<div class="row">
			<div class="col-lg-3 col-md-5">
				<div class="search">
					<h2>Поиск</h2>
					<?php my_get_search_form(); ?>
				</div>
			</div>
			<div class="col-lg-9 col-md-7">
				<?php
				$args = array(
					'post_type' => 'news',
					//'cat' => 60,
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post(); ?>
						<div class="newspage-item" data-aos="fade-up" data-aos-duration="2000">
							<div class="date"><?php the_time('j F Y'); ?></div>
							<?php echo do_shortcode('[addtoany]');?>
							<a href="<?php the_permalink(); ?>">
							    <div class="cat">Категория: <?php the_field('cat'); ?></div>
							    <h3><?php the_title(); ?></h3>
							    <?php the_excerpt(); ?>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
							</div>
						</div>
				<?php }
					wp_reset_postdata();
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="pagination">
				<?php wp_pagenavi(); ?>
				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>