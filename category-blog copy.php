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
				<h1 data-aos="fade-up" data-aos-duration="2000"><?php single_cat_title(); ?></h1>
			</div>
		</div>
	</div>
</div>


<div class="homeblog blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_field('blog-descr', 42); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo get_home_url(); ?>/category/baza/">
				    <div class="homeblog-item" data-aos="zoom-in" data-aos-duration="2000">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog1.svg" alt="">
    					<h3>База знаний</h3>
    					<div class="btn-wrap">
    						<a href="<?php echo get_home_url(); ?>/category/baza/" class="more">Подробнее</a>
    					</div>
    				</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="https://t.me/+SREnvwW83FhZI0AF">
				    <div class="homeblog-item" data-aos="zoom-in" data-aos-duration="2000">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog2.svg" alt="">
    					<h3>Форум бухгалтеров</h3>
    					<div class="btn-wrap">
    					<a href="https://t.me/+SREnvwW83FhZI0AF" target="_blank" class="more">Подробнее</a>
    					</div>
    				</div>
				</a>
			</div>
			<div class="col-md-4">
				<div class="homeblog-item" data-aos="zoom-in" data-aos-duration="2000">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog3.svg" alt="">
					<h3>Вопросы & ответы</h3>
					<!-- <div class="btn-wrap">
						<a href="#" class="more">Подробнее</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="news blogpage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Новости</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$i = 0;
			$loop = new WP_Query(array(
				'post_type' => 'blog',
				'post_status' => 'publish',
				'posts_per_page' => -1,
				//'cat' => 81,
				'orderby' 	=> 'date',
				'order' 		=> 'DESC'
			));
			while ($loop->have_posts()) : $loop->the_post();
				$i++;
				if ($i % 2 === 0) { ?>
					<div class="col-lg-4 col-md-6">
						<div class="news-item">
							<div class="date"><?php the_time('j F Y'); ?></div>
							<h4><?php the_title(); ?></h4>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнеe</a>
								<!-- <div class="share">
										<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/share.svg" alt=""></a>
									</div> -->
							</div>
						</div>
					</div>
				<?php } else { ?>
					<div class="col-lg-4 col-md-6">
						<div class="news-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<div class="overlay"></div>
							<div class="date"><?php the_time('j F Y'); ?></div>
							<h4><?php the_title(); ?></h4>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more moref">Подробнеe</a>
								<!-- <div class="share">
										<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sharew.svg" alt=""></a>
									</div> -->
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endwhile; ?>

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