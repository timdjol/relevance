<?php get_header(); ?>

<div class="data searchpage">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-5">
				<div class="search">
					<h2>Поиск документов</h2>
					<?php my_get_search_form(); ?>
				</div>
			</div>

			<div class="col-lg-8 col-md-7">

				<h2>Поиск по: "<?php echo $_GET['s']; ?>"</h2>
				<?php
				$args = array_merge($wp_query->query, array());
				query_posts($args); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="data-item">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
							</div>
						</div>
					<?php endwhile;
				else : ?>
					<h3>Поиск не дал результатов</h3>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>