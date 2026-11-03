<footer>
	<div class="subscribe">
		<div class="container">
			<div class="col-md-12">
				<h2 data-aos="fade-up" data-aos-duration="2000">Будьте в курсе последних новостей</h2>
				<form class="form-sub">
					<div class="success">
						<p>Спасибо за заявку!</p>
					</div>
					<input type="text" placeholder="Ваша электронная почта" name="email" required>
					<button id="send">Подписаться</button>
				</form>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 footer-item">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" class="logo" alt="">
					<p>Консалтинговая компания</p>
					<p>&copy; 2019 «Релеванс»</p>
					<p>Все права защищены</p>
				</div>
				<div class="col-lg-3 d-xl-block d-lg-block d-none"></div>
				<div class="col-lg-3 col-md-4 footer-item">
					<h3>Быстрые ссылки</h3>
					<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => false,)); ?>
				</div>
				<div class="col-lg-3 col-md-4 footer-item">
					<h3>Контакты</h3>
					<ul>
						<li><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></li>
						<li><a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?></a></li>
						<li><a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?></a></li>
						<li><a href="maito:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
						<li><a href="https://2gis.kg/bishkek/firm/70000001051597883?m=74.5782%2C42.8787%2F16" target="_blank"><?php the_field('address', 'option'); ?></a></li>
					</ul>
					<ul class="soc">
						<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt=""></a></li>
						<li><a href="http://wa.me/<?php the_field('whatsapp', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.svg" alt=""></a></li>
						<li class="d-xl-inline-block d-lg-inline-block d-none"><a rel="nofollow" href="https://web.telegram.org/#/im?p=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>
				<li class="d-xl-none d-lg-none d-inline-block"><a rel="nofollow" href="tg://resolve?domain=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>						<li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.svg" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="hidden">
	<form class="form-callback" id="callback">
		<input type="hidden" name="project_name" value="Relevance">
		<input type="hidden" name="admin_email" value="<?php the_field('email', 'option') ?>">
		<input type="hidden" name="form_subject" value="Заявка с сайта Relevance">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoform.svg" alt="">
		<h3>Спасибо за проявленный интерес!</h3>
		<div class="success">
			<p>Мы свяжемся с вами в <br> ближайшее время</p>
			<div class="btn-wrap">
				<a href="<?php echo get_home_url(); ?>" class="more">Вернуться на главную</a>
			</div>
		</div>
		<div class="form-group">
			<input type="text" name="name" placeholder="Ваше имя*" required>
		</div>
		<div class="form-group">
			<input type="text" name="phone" placeholder="Ваш номер телефона*" required>
		</div>
		<div class="btn-wrap">
			<button class="btn" id="send">Оставить заявку</button>
			<div class="descr">Мы свяжемся с вами в ближайшее время</div>
		</div>
		<div class="numbers">
			<ul>
				<li><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?> <span><?php the_field('str1', 'option'); ?></span></a></li>
				<li><a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?> <span><?php the_field('str2', 'option'); ?></span></a></li>
				<li><a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?> <span><?php the_field('str3', 'option'); ?></span></a></li>
			</ul>
		</div>
		<div class="social">
			<p>Мы в социальных сетях</p>
			<ul class="soc">
				<li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookb.svg" alt=""></a></li>
				<li><a href="http://wa.me/<?php the_field('whatsapp', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsappb.svg" alt=""></a></li>
				<li class="d-xl-inline-block d-lg-inline-block d-none"><a rel="nofollow" href="https://web.telegram.org/#/im?p=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegramb.svg" alt=""></a></li>
				<li class="d-xl-none d-lg-none d-inline-block"><a rel="nofollow" href="tg://resolve?domain=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegramb.svg" alt=""></a></li>				<li><a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagramb.svg" alt=""></a></li>
			</ul>
		</div>
	</form>
</div>

<div class="call-button">
	<div class="pulse">
		<div class="bloc"></div>
		<div class="anim-phone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mes.svg"></div>
		<div class="text">Связаться</div>
		<div class="soc-list">
			<ul>
				<li><a rel="nofollow" href="tel:<?php the_field('phone', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phonew.svg" alt=""></a></li>
				<li><a rel="nofollow" href="http://wa.me/<?php the_field('whatsapp', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.svg" alt=""></a></li>
				<li class="d-xl-inline-block d-lg-inline-block d-none"><a rel="nofollow" href="https://web.telegram.org/#/im?p=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>
				<li class="d-xl-none d-lg-none d-inline-block"><a rel="nofollow" href="tg://resolve?domain=<?php the_field('telegram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>
				<li><a rel="nofollow" href="#" class="btn-close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.svg" class="close" alt=""></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="fixedhead">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt=""></a>
			</div>
			<div class="col-md-9">
				<nav>
					<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false,)); ?>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>