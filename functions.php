<?php
function jack_sparrow_setup() {
	wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
	wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'jack_sparrow_setup');

function jack_sparrow_init() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5', 
		array('comment-list', 'comment-form', 'search-form')
	);
}
add_action('after_setup_theme', 'jack_sparrow_init');


// porject post type
function jack_sparrow_post_type() {
	register_post_type('project', 
		array('rewrite' => array('slug' => 'projects'),
			'labels' => array( 'name' => 'Projects',
			'singular_name' => 'Project',
			'add_new_item' => 'Add New Project',
			'edit_item' => 'Edit Project',
			),
			'menu-icon' => 'dashicon-clipboard',
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'thumbnail', 'editor', 'excerpt', 'comments',)
		)
	);
};

add_action('init', 'jack_sparrow_post_type');
?>
