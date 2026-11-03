<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<!-- <base href="/"> -->
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon1.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon1.png">
	<!-- Template Basic Images End -->
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,400;1,500;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>

	<header style="background-image: url(<?php the_field('mainimage', 42); ?>);">
	    <div class="overlay" style="background-color: rgba(0,0,0,.<?php the_field('maincolor', 42); ?>);"></div>
		<div class="top-head">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-5">
						<ul class="soc">
							<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt=""></a></li>
							<li><a href="http://wa.me/<?php the_field('whatsapp', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.svg" alt=""></a></li>
							<li><a href="http://t.me/<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>
							<li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.svg" alt=""></a></li>
						</ul>
					</div>
					<div class="col-lg-6 d-xl-block d-lg-block d-none">
						<ul class="cont">
							<li><a href="tel:<?php the_field('phone', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phonew.svg" alt=""> <?php the_field('phone', 'option'); ?></a></li>
							<li><a href="mailto:<?php the_field('email', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/emailw.svg" alt=""> <?php the_field('email', 'option'); ?></a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-7">
						<div class="btn-wrap">
							<a href="#callback">связаться с нами</a>
						</div>
						<ul class="lang">
						    <li class="current"><a href="<?php echo get_home_url(); ?>">РУС</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="head d-xl-block d-lg-block d-md-block d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt=""></a>
					</div>
					<div class="col-md-9">
						<nav>
							<a href="#" class="toggle-mnu d-xl-none d-lg-none d-md-none"><span></span></a>
							<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false,)); ?>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2 headtext">
						<h1 data-aos="fade-up" data-aos-duration="2000">Добро пожаловать в консалтинговую компанию Relevance</h1>
						<ul class="buttons" data-aos="fade-up" data-aos-duration="2000">
							<li><a href="#service" class="btn scrollto">Наши услуги</a></li>
							<li><a href="#about" class="btn scrollto">О нас</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="head mobhead d-xl-none d-lg-none d-md-none d-block">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt=""></a>
					</div>
					<div class="col-md-9">
						<nav>
							<a href="#" class="toggle-mnu d-xl-none d-lg-none"><span></span></a>
							<ul class="menu">
								<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoform.svg" alt=""></a>
								<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
								<li><a href="<?php echo get_home_url(); ?>/category/blog">Блог</a></li>
								<li><a href="<?php echo get_home_url(); ?>/category/baza">База знаний</a></li>
								<li><a href="<?php echo get_home_url(); ?>/category/novosti">Новости</a></li>
								<li><a href="<?php echo get_home_url(); ?>/kontakty">Контакты</a></li>
								<li class="phone"><a href="tel:+996 777 54 21 00"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.svg" alt=""> +996 777 54 21 00   Налоговый консультант</a></li>
								<li class="phone"><a href="tel:+996 701 00 04 10"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.svg" alt=""> +996 701 00 04 10   Специалист по регистрации компаний</a></li>
								<li><a href="mailto:<?php the_field('email', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.svg" alt=""> <?php the_field('email', 'option'); ?></a></li>
								<ul class="soc">
									<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookb.svg" alt=""></a></li>
									<li><a href="http://wa.me/<?php the_field('whatsappb', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsappb.svg" alt=""></a></li>
									<li><a href="http://t.me/<?php the_field('telegramb', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegramb.svg" alt=""></a></li>
									<li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagramb.svg" alt=""></a></li>
								</ul>
								<ul class="lang">
									<li class="current"><a href="<?php echo get_home_url(); ?>">РУС</a></li>
								</ul>
							</ul>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2 headtext">
						<h1 data-aos="fade-up" data-aos-duration="2000">Добро пожаловать в консалтинговую компанию Relevance</h1>
						<ul class="buttons">
							<li><a href="#service" class="btn scrollto">Наши услуги</a></li>
							<li><a href="#about" class="btn scrollto">О нас</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>