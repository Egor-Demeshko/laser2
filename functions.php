<?php
require get_template_directory() . '/inc/menus/init_menus.php';
require get_template_directory() . '/inc/const.php';
require get_template_directory() . '/inc/queries/custom_fields.php';

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('laser_style', get_template_directory_uri() . '/dist/index.css');
    wp_enqueue_script('laser_script', get_template_directory_uri() . '/dist/index.js', array(), '1.0.0', true);
});

add_filter("script_loader_tag", function($tag, $handle) {
    if ('laser_script' !== $handle) {
        return $tag;
    }
    return str_replace(' src', ' type="module" src', $tag);
}, 10, 2);

add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height' => 70,
        'width' => 130,
    ]);
});

add_filter( 'document_title_parts', 'document_title_parts_filter' );

/**
 * Change title tag content. delete tagline
 * @param array $title The document title parts.
 * @return array
 */
function document_title_parts_filter( $title ){
	$title['tagline'] = '';
	return $title;
}

//регистриуем меню
add_action('init', function(){
    init_menus();
});