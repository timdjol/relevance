<?php get_header(); ?>

<div class="page pagetitle servicetitle">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
