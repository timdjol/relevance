<?php
/***
 *Template name: Форум
 */
get_header(); ?>

<div class="pagetitle forumtitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="page newspage forumpage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			    <h1 data-aos="fade-up" data-aos-duration="2000"><?php the_title(); ?></h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				<div class="clearfix"></div>
				<div class="share">
						<div class="descr">Поделиться</div>
						<?php echo do_shortcode('[addtoany]');?>
					</div>
					<div class="cat">
						<a target="_blank" href="https://t.me/+SREnvwW83FhZI0AF" class="more">Перейти на форум</a>
					</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>