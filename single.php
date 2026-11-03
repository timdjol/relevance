<?php get_header(); ?>

<div class="page pagetitle">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumbs">
						<ul>
							<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
							<li><a href="<?php echo get_home_url(); ?>/category/baza/">База знаний</a></li>
							<li><?php the_title(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="newspage single singlenews singlebaza">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-5">
					<div class="search">
						<h2>Поиск документов</h2>
						<?php my_get_search_form(); ?>
					</div>
				</div>
				<div class="col-lg-9 col-md-7">
					<h1>Вид документа: <?php the_title(); ?></h1>
				    
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>	
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					<!-- <div class="share">
					    <div class="descr">Поделиться</div>
					    <ul class="soc">
					    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookb.svg" alt=""></a></li>
					    <li><a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsappb.svg" alt=""></a></li>
					    <li><a href="https://telegram.me/share/url?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/telegramb.svg" alt=""></a></li>
					                        <li><a onclick="copyToClipboard()" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkb.svg" alt=""></a></li> 
					    </ul>
					</div> -->
					<div class="share">
						<div class="descr">Поделиться</div>
						<?php echo do_shortcode('[addtoany]');?>
					</div>
					<div class="cat">
						<a href="<?php echo get_home_url(); ?>/category/baza" class="more">Вернуться на главную</a>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>


