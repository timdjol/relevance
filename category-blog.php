<?php get_header(); ?>

<div class="page pagetitle blogtitle">
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

<div class="homeblog blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			    <h1 data-aos="fade-up" data-aos-duration="2000"><?php single_cat_title(); ?></h1>
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
				<a href="<?php echo get_home_url(); ?>/forum-buhgalterov/">
				    <div class="homeblog-item" data-aos="zoom-in" data-aos-duration="2000">
    					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog2.svg" alt="">
    					<h3>Форум бухгалтеров</h3>
    					<div class="btn-wrap">
    					<a href="<?php echo get_home_url(); ?>/forum-buhgalterov/" target="_blank" class="more">Подробнее</a>
    					</div>
    				</div>
				</a>
			</div>
			<div class="col-md-4">
				<div class="homeblog-item" data-aos="zoom-in" data-aos-duration="2000">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog3.svg" alt="">
					<h3>Вопросы & ответы</h3>
					<div class="btn-wrap">
					    <a href="#" class="more">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="news newspage blogpage blognews d-xl-block d-lg-block d-none">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <h2 data-aos="fade-up" data-aos-duration="2000">Новости</h2>
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
					'post_type' => 'blog',
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

<div class="news blogpage d-xl-none d-lg-none d-md-none d-block">
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
				'post_type' => 'news',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				//'cat' => 81,
				'orderby' 	=> 'date',
				'order' 		=> 'DESC'
			));
			while ($loop->have_posts()) : $loop->the_post();
				$i++;
				if ($i % 2 === 0) { ?>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
						<div class="news-item bgn">
							<a href="<?php the_permalink(); ?>">
							    <div class="date"><?php the_time('j F Y'); ?></div>
							    <h4><?php the_title(); ?></h4>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнеe</a>
								<div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/share.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
							</div>
						</div>
					</div>
				<?php } else { ?>
					<div class="col-lg-4 col-md-6">
						<div class="news-item" data-aos="zoom-in" data-aos-duration="2000" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<a href="<?php the_permalink(); ?>">
							    <div class="overlay"></div>
							    <div class="date"><?php the_time('j F Y'); ?></div>
							    <h4><?php the_title(); ?></h4>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more moref">Подробнеe</a>
								<div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sharew.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endwhile; ?>

		</div>
		<div class="row">
		    <div class="col-md-12">
		        <div class="btn-wrap-all" data-aos="fade-up" data-aos-duration="2000">
					<a href="<?php echo get_home_url(); ?>/category/novosti/" class="btn">Показать больше</a>
				</div>
		    </div>
		</div>
	</div>
</div>

<div class="news blogpage d-xl-none d-lg-none d-md-block d-none">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Новости</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$j = 0;
			$loop = new WP_Query(array(
				'post_type' => 'news',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				//'cat' => 81,
				'orderby' 	=> 'date',
				'order' 		=> 'DESC'
			));
			while ($loop->have_posts()) : $loop->the_post(); $j++;
				if ($j == 2 || $j == 3 ) { ?>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
						<div class="news-item bgn">
							<a href="<?php the_permalink(); ?>">
							    <div class="date"><?php the_time('j F Y'); echo $j;?></div>
							    <h4><?php the_title();?> </h4>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнеe</a>
							<div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/share.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
							</div>
						</div>
					</div>
				<?php } else { ?>
					<div class="col-lg-4 col-md-6">
						<div class="news-item" data-aos="zoom-in" data-aos-duration="2000" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<a href="<?php the_permalink(); ?>">
							    <div class="overlay"></div>
							    <div class="date"><?php the_time('j F Y'); ?></div>
							    <h4><?php the_title(); ?></h4>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more moref">Подробнеe</a>
								<div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sharew.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php endwhile; ?>

		</div>
		<div class="row">
		    <div class="col-md-12">
		        <div class="btn-wrap-all" data-aos="fade-up" data-aos-duration="2000">
					<a href="<?php echo get_home_url(); ?>/category/novosti/" class="btn">Показать больше</a>
				</div>
		    </div>
		</div>
	</div>
</div>


<?php get_footer(); ?>