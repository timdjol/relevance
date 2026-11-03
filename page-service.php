<?php

/***
 *Template name: Услуги
 */
get_header(); ?>

<div class="page pagetitle servicetitle">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li>Наши услуги</li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
				<h1 data-aos="fade-up" data-aos-duration="2000"><?php the_title(); ?></h1>
                               <?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<div class="homeservice service">
	<div class="container">
		<div class="row">
			<?php
			if (have_rows('services')) :
				while (have_rows('services')) : the_row(); ?>
					<div class="col-lg-6 col-md-12">
						<div class="homeservice-item" data-aos="zoom-in" data-aos-duration="2000">
							<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
							<h4><?php the_sub_field('title'); ?></h4>
							<?php the_sub_field('descr'); ?>
						</div>
					</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</div>

<div class="contacts service-contacts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Контакты</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-5">
				<p>У вас остались вопросы?</p>
				<p>Пожалуйста, свяжитесь с нами в любом удобном для вас формате.</p>
			</div>
			<div class="col-lg-4 col-md-7">
				<div class="contacts-item address">
					<h3>Наш адрес</h3>
					<div class="descr"><?php the_field('address', 'option'); ?></div>
					<!-- <div class="btn-wrap">
							<a href="" class="more">Показать на карте</a>
						</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="orders">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="#callback">
					<div class="orders-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meet.svg" alt="">
						<h3>Назначить встречу</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="tel:<?php the_field('phone', 'option'); ?>">
					<div class="orders-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phonew.svg" alt="">
						<h3>Позвонить</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="http://wa.me/<?php the_field('whatsapp', 'option'); ?>" target="_blank">
					<div class="orders-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/emailw.svg" alt="">
						<h3>Написать на WhatsApp</h3>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<?php get_template_part( 'foot' ); ?>