<?php get_header(); ?>

<div class="page pagetitle">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li>База знаний</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="data">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <h1 data-aos="fade-up" data-aos-duration="2000">База знаний</h1>
	        </div>
	    </div>
		<div class="row">
			<div class="col-lg-3 col-md-5">
				<div class="search">
					<h2>Поиск документов</h2>
					<?php my_get_search_form(); ?>
				</div>
				<div class="sidebar">
					<h2>Нормативно-правовые акты</h2>
					<?php wp_nav_menu(array('theme_location' => 'cat-menu', 'container' => false,)); ?>
					<!-- <?php
								if (is_category()) {
									if (count(get_categories('child_of=' . $cat)))
										echo '<ul>';
									$current_cat = get_query_var('cat');
									wp_list_categories('child_of=' . $current_cat . '&title_li=&show_count=0&exclude=20791');
									echo '</ul>';
								}
								?> -->
				</div>
			</div>

			<div class="col-lg-9 col-md-7 wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="data-item" data-aos="fade-up" data-aos-duration="2000">
							<div class="cattitle"><?php single_cat_title(); ?></div>
							
						

							<div class="share">
								<!-- <ul>
								    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shareb.svg" alt=""></a></li>
								    <li><a onclick="copyToClipboard()" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkb.svg" alt=""></a></li> 
								</ul> -->
								<?php echo do_shortcode('[addtoany]');?>
							</div>
							<div class="hidden" id="my_copy"><?php the_permalink(); ?></div>
							<a href="<?php the_permalink(); ?>">
							    <div class="cat">Вид документа: <?php the_title(); ?></div>
							    <?php the_excerpt(); ?>
							</a>
							<div class="btn-wrap">
								<a href="<?php the_permalink(); ?>" class="more">Документ</a>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- post navigation -->
				<?php else : ?>
					<h2 style="text-align: left">Нет данных</h2>
				<?php endif; ?>

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

<?php get_footer(); ?>

<script>
        function copyToClipboard(element) {
 var $temp = $("<input>");
 $("body").append($temp);
 $temp.val($(element).html()).select();
 document.execCommand("copy");
 alert($(element).html());
 $temp.remove();
}
    </script>