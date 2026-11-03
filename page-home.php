<?php
/***
 *Template name: Главная
 */
get_template_part( 'head' ); ?>

<div class="advantages">
	<div class="container">
		<div class="row">
			<?php
			if (have_rows('adv')) :
				while (have_rows('adv')) : the_row(); ?>
					<div class="col-lg-3 col-md-6">
						<div class="advantages-item" data-aos="zoom-in" data-aos-duration="2000">
							<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
							<h4><?php the_sub_field('title'); ?></h4>
							<p><?php the_sub_field('descr'); ?></p>
						</div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</div>

<div class="homeservice" id="service">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Наши услуги</h2>
			</div>
		</div>
		<div class="row">
			<?php
			if (have_rows('services')) :
				while (have_rows('services')) : the_row(); ?>
					<div class="col-lg-4 col-md-6">
						<a href="<?php the_sub_field('link'); ?>">
						    <div class="homeservice-item" data-aos="zoom-in" data-aos-duration="2000">
    							<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
    							<h4><?php the_sub_field('title'); ?></h4>
    							<?php the_sub_field('descr'); ?>
    							<div class="btn-wrap">
    								<a href="<?php the_sub_field('link'); ?>" class="more">Подробнее</a>
    							</div>
    						</div>
						</a>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</div>

<div class="homeabout" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">О нас</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-12">
				<div class="leftside" data-aos="fade-left" data-aos-duration="2000">
					<?php the_field('about-descr1'); ?>
				</div>
			</div>
			<div class="col-lg-5 col-md-12">
				<div class="rightside" data-aos="fade-right" data-aos-duration="2000">
					<?php the_field('about-descr2'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="partners" id="partners">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-8 offset-lg-2 col-md-12">
	            <h2 data-aos="fade-up" data-aos-duration="2000">Наши партнеры</h2>
				<?php the_field('partners-descr'); ?>
	        </div>
	    </div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-md-12">
				<div class="owl-carousel owl-partners">
				    <?php
        			if (have_rows('partners')) :
        				while (have_rows('partners')) : the_row(); ?>
        					<div class="partners-item">
        						<div style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
							    <div style="background-image: url(<?php the_sub_field('image2'); ?>)"></div>
        					</div>
        			<?php endwhile;
        			endif; ?>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="reviews">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Отзывы</h2>
				<div class="owl-carousel owl-reviews">
					<?php
					if (have_rows('reviews')) :
						while (have_rows('reviews')) : the_row(); ?>
							<div class="reviews-item">
								<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
								<?php the_sub_field('descr'); ?>
								<h5><?php the_sub_field('title'); ?></h5>
								<div class="position"><?php the_sub_field('position'); ?></div>
							</div>
					<?php endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="homeblog">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Блог</h2>
				<?php the_field('blog-descr'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
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
			<div class="col-md-6">
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
		</div>
	</div>
</div>

<div class="news homenews d-xl-block d-lg-block d-none">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Новости</h2>
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
						if ($i == 2) { ?>
							<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
							    <div class="news-item">
								<a href="<?php the_permalink(); ?>">
								    <div class="overlay"></div>
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
							    <div class="news-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" data-aos="zoom-in" data-aos-duration="2000">
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

<div class="news homenews d-xl-none d-lg-none d-md-none d-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Новости</h2>
				<div class="owl-carousel owl-news">
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
					while ($loop->have_posts()) : $loop->the_post();
						$j++;
						if ($j == 2 || $j == 4) { ?>
							<div class="news-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" data-aos="zoom-in" data-aos-duration="2000">
								<a href="<?php the_permalink(); ?>">
								    <div class="overlay"></div>
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
						<?php } else { ?>
							<div class="news-item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" data-aos="zoom-in" data-aos-duration="2000">
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
						<?php } ?>
					<?php endwhile; ?>
				</div>
			</div>
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

<div class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Контакты</h2>
				<p>Вы можете написать или позвонить нам.</p>
				<p>Мы с радостью ответим на любые ваши вопросы.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="contacts-item email" data-aos="fade-left" data-aos-duration="2000">
					<h3>Почта</h3>
					<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
				</div>
				<div class="contacts-item phone" data-aos="fade-left" data-aos-duration="2000">
					<h3>Телефон</h3>
					<ul>
					    <?php 
					        $phone1 = get_field('phone', 'option');
					        $phone2 = get_field('phone2', 'option');
					        $phone3 = get_field('phone3', 'option'); 
					        $whatsapp = get_field('whatsapp', 'option'); 
					        if($phone1){
					            echo '<li><a href="tel:'.$phone1.'">'.$phone1.' <a href="http://wa.me/'.$whatsapp.'"><img src="'.get_stylesheet_directory_uri().'/img/whatsappb.svg" alt=""></a></a></li>';
					        }
					        if($phone2){
					            echo '<li><a href="tel:'.$phone2.'">'.$phone2.' <img src="'.get_stylesheet_directory_uri().'/img/phone.svg" alt=""></a></a></li>';
					        }
					        if($phone3){
					            echo '<li><a href="tel:'.$phone3.'">'.$phone3.' <img src="'.get_stylesheet_directory_uri().'/img/phone.svg" alt=""></a></a></li>';
					        }
					   ?>
					</ul>
				</div>
				<div class="contacts-item graph" data-aos="fade-left" data-aos-duration="2000">
					<h3>Режим работы</h3>
					<div class="descr"><?php the_field('graph', 'option'); ?></div>
				</div>
				<div class="contacts-item address" data-aos="fade-left" data-aos-duration="2000">
					<h3>Наш адрес</h3>
					<div class="descr"><a target="_blank" href="https://2gis.kg/bishkek/firm/70000001051597883/center/74.5782%2C42.8787/zoom/17.9897"><?php the_field('address', 'option'); ?></a></div>
					<!-- <div class="btn-wrap">
						<a href="" class="more">Показать на карте</a>
					</div> -->
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="map" data-aos="fade-right" data-aos-duration="2000">
				    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
				    <script charset="utf-8">
				        new DGWidgetLoader({
				            "width": "100%",
				            "height": 500,
				            "scrollWheelZoom": false,
				            "zoomControl": true,
				            "borderColor": "#a3a3a3",
				            "pos": { "lat": 42.878688, "lon": 74.578238, "zoom": 16 },
				            "opt": { "city": "bishkek" },
				            "org": [{ "id": "70000001051597883" }]
				        });
				    </script>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>