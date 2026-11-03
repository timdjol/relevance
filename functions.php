<?php
//connection
function custom_scripts() {
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.min.css', array(), 3.0);
	wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.min.js', array(), 2.3);
}
add_action('wp_enqueue_scripts', 'custom_scripts');

//support
add_theme_support('post-thumbnails');
add_theme_support('do_shortcode');
add_theme_support('widgets');


//widget
register_sidebar( array(
    'name' =>'Категории',
    'id' => 'catmenu',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_nav_menus( array(
 'main-menu' => __( 'Main Menu', 'relevance' ),
 'cat-menu' => __( 'Cat Menu', 'relevance' ),
 'footer-menu' => __( 'Footer Menu', 'relevance' )
) );

//Excerpt
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_filter('excerpt_more', function($more) {
	return ' ...';
});

//ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Контактные данные',
		'menu_title'    => 'Контактные данные',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));	
}

remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'rsd_link' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action( 'wp_head', 'wp_generator' ); 
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

//role
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
	global $user_ID;
	if ( current_user_can( 'editor' ) ) {
	    remove_menu_page('tools.php'); // Инструменты
	    remove_menu_page('edit-comments.php'); 
	    remove_menu_page('profile.php'); 
	    remove_menu_page('themes.php'); 
	    remove_menu_page('users.php'); 
	    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
	  }
	}
	$role_object = get_role( 'editor' );
	$role_object->add_cap( 'edit_theme_options' );

//hide logo WP
	function pss_remove_wp_logo( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );
	}
	add_action( 'admin_bar_menu', 'pss_remove_wp_logo', 999 );

//свой текст в футере админки start 
	function wph_admin_footer_text () {
		echo '<i>Relevance</i> ';
	}
	add_filter('admin_footer_text', 'wph_admin_footer_text');

	function my_login_logo(){
		echo '
		<style type="text/css">
        #login h1 a { background: url('. get_bloginfo('template_directory') .'/img/logoform.svg) no-repeat 0 0 !important; width: 240px; margin-bottom: 0}
        .login form{
            margin-top: 0;
        }
		</style>';
	}
	add_action('login_head', 'my_login_logo');
	

//custom single template
add_filter( 'template_include', 'custom_single_product_template_include', 50, 1 );
function custom_single_product_template_include( $template ) {
    if ( is_singular('product') && (has_term( 'probnyj-set', 'product_cat')) ) {
        $template = get_stylesheet_directory() . '/woocommerce/single-product-promo.php';
    } 
    return $template;
}

//news
	function custom_type_news() {
		$labels = array(
			'name'                  => 'Новости',
			'singular_name'         => 'Новость',
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'           => 'dashicons-media-text',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'news' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'         => array('news', 'category' ),
		);
		register_post_type( 'news', $args );
	}
	add_action( 'init', 'custom_type_news' );


	//blog
	function custom_type_blog() {
		$labels = array(
			'name'                  => 'Блог',
			'singular_name'         => 'Блог',
		);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'           => 'dashicons-media-text',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'blog' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'         => array('blog', 'category' ),
		);
		register_post_type( 'blog', $args );
	}
	add_action( 'init', 'custom_type_blog' );
	
	//search
	function my_get_search_form() {
		do_action( 'get_search_form' );
		//$dropdowncats = wp_dropdown_categories("echo=0&show_option_none=Все категории");
		$form =
		'<form id="searchform" role="search" method="get" action="' . home_url( '/' ) .  '" >
		<img class="icon" src="'.get_stylesheet_directory_uri().'/img/search.svg'.'">
		<div class="form-group"><input name="s" id="s" placeholder="Поиск..." type="text" value="' . get_search_query() . '" /></div>
		<button class="btn" name="submit" id="searchsubmit">Искать</button>
		
		</form>';
		echo apply_filters('get_search_form', $form);
	}

	add_action('pre_get_posts', 'search_by_cat');
	function  search_by_cat() {
		global $wp_query;
		if (is_search()) {
			$cat =  intval($_GET['cat']);
			if($cat<0) $cat='';
			$wp_query->query_vars['cat'] = $cat;
		}
	}
	
	
	add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .toplevel_page_wpseo_workouts{
        display: none;
    }
  </style>';
}
	
?>