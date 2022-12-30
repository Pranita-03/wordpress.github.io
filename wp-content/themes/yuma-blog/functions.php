<?php
/**
 * Theme functions and definitions
 *
 * @package yuma_blog
 */  

if ( ! function_exists( 'yuma_blog_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function yuma_blog_enqueue_styles() {
		wp_enqueue_style( 'yuma-parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'yuma-blog-style', get_stylesheet_directory_uri() . '/style.css', array('yuma-parent-style') );
	}
endif;
add_action( 'wp_enqueue_scripts', 'yuma_blog_enqueue_styles' );

if ( ! function_exists( 'yuma_blog_theme_defaults' ) ) :
    /**
     * Customize theme defaults.
     *
     * @since 1.0.0
     *
     * @param array $defaults Theme defaults.
     * @param array Custom theme defaults.
     */
    function yuma_blog_theme_defaults( $defaults ) {
        // theme color
        $defaults['theme_color'] = 'default';

        // typography
        $defaults['heading_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['section_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['home_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['page_title_font_family'] = json_encode(array('font' => 'Alata') );
        $defaults['entry_title_font_family'] = json_encode(array('font' => 'Alata') );

        // header section
        $defaults['header_height'] = 150;
        $defaults['header_site_details_layout'] = 'vertical-site-details';
        $defaults['header_left_element'] = 'off_canvas_bar';
        $defaults['header_right_element'] = 'social_menu,search';
        
        // slider section
        $defaults['slider_width'] = 'container-width';
        $defaults['slider_layout'] = 'center-align';
        $defaults['slider_column'] = 1;
        $defaults['slider_content_type'] = 'post';
        
        // latest blog
        $defaults['blog_column_type'] = 'column-3';
        $defaults['blog_layout'] = 'left-align';
        $defaults['enable_latest_blog_masonry'] = false;
        $defaults['blog_image_size'] = 'yuma-post-thumbnail';
        
        // off canvas / sidebar
        $defaults['off_canvas_position'] = 'align-left';
        
        // single post
        $defaults['single_header_image_size'] = 'original-size';
        
        // preloader
        $defaults['enable_preloader'] = true;
        $defaults['preloader_icon'] = 'spinner-one-way';
        
        return $defaults;
    }
endif;
add_filter( 'yuma_default_theme_options', 'yuma_blog_theme_defaults', 99 );

if ( ! function_exists( 'yuma_blog_set_theme_mods' ) ) :
    /**
     * Set theme mod.
     */
    function yuma_blog_set_theme_mods() {
        $theme_mod = get_theme_mod( 'yuma_theme_options' );
        if ( isset( $theme_mod ) && $theme_mod ) {
            return;
        }

        $yuma_theme_options = array( 
            // header section
            'header_center_element' => 'site_details',

            // navbar section
            'navbar_bg_color' => '#ffffff', 
            'navbar_elements_color' => '#0a0e14',
            'navbar_center_element' => 'primary_menu'
        );
        set_theme_mod( 'yuma_theme_options', $yuma_theme_options );
    }
endif;
add_action( 'after_setup_theme', 'yuma_blog_set_theme_mods' );
