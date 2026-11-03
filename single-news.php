<?php get_header(); ?>

<div class="page pagetitle">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><a href="<?php echo get_home_url(); ?>/category/novosti/">Новости</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="newspage single singlenews">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-5">
				<div class="search">
					<h2>Поиск</h2>
					<?php my_get_search_form(); ?>
				</div>
			</div>
			<div class="col-lg-9 col-md-7">
				<h1><?php the_title(); ?></h1>
				<div class="date"><?php the_time('j F Y'); ?></div>
				<?php $cat = get_field('cat');
					if($cat){
						echo '<div class="cat">Категория: ' . $cat . '</div>';
					}		
					if (have_posts()) : while (have_posts()) : the_post();
						the_content(); 
					endwhile; 
				else :
				endif; ?>

				<div class="clearfix"></div>
				<div class="share">
						<div class="descr">Поделиться</div>
						<?php echo do_shortcode('[addtoany]');?>
					</div>
				<div class="cat btn-home">
					<a href="<?php echo get_home_url(); ?>/category/novosti" class="more">Вернуться на главную</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="homenews related news">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Больше новостей</h2>
			</div>
		</div>
		<div class="row">
		    <?php $categories = get_the_category($post->ID);
					if ($categories) {
						$category_ids = array(); $i=0;
						foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
						$args = array(
							'category__in' => $category_ids, // Сортировка производится по категориям
							'post__not_in' => array($post->ID),
							'post_type' => 'news',
							'showposts' => 3, //Количество выводимых записей
							'ignore_sticky_posts' => 1
						); // Запрещаем повторение ссылок
						$my_query = new wp_query($args);
						if ($my_query->have_posts()) {

							while ($my_query->have_posts()) {
								$my_query->the_post(); $i++;
					if ($i % 2 === 0) { ?>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
						<div class="news-item">
							<a href="<?php the_permalink(); ?>">
							    <div class="date"><?php the_time('j F Y'); ?></div>
							    <h4><?php the_title(); ?></h4>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнеe</a>
								<div class="share">
								        <div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/share.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
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
								    <div class="share">
								        <div class="a2a_kit a2a_kit_size_16 addtoany_list" data-a2a-url="<?php the_permalink(); ?>" data-a2a-title="Постановление №:371" style="line-height: 16px;"><a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sharew.svg" width="16" height="16" alt="Copy Link"></a></div>
								    </div>
								</div>
							</div>
						</div>
					</div>
								
					<?php }
							}
						}
						wp_reset_query();
					}
					?>
		</div>
	</div>
</div>


<?php get_footer(); ?>