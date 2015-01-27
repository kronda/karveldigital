<?php
/**
 * @package Make Plus
 */

if ( ! function_exists( 'ttfmp_style_kit_definitions' ) ) :
/**
 * Define the settings for each Style Kit.
 *
 * @since 1.1.0.
 *
 * @return array    The array of settings for each kit.
 */
function ttfmp_style_kit_definitions() {
	$definitions = array(
		'light' => array(
			'label' => __( 'Light', 'make-plus' ),
			'priority' => 10,
			'definitions' => array(
				// Site Title & Tagline
				'color-site-title'                  => '#171717',

				// General
				'general-layout'                    => 'boxed',

				// Background
				'background_color'                  => '#f3f3f3',
				'background_image'                  => '',

				// New Fonts
				// Site Title & Tagline
				'font-family-site-title'            => 'PT Sans',
				'font-size-site-title'              => 34,
				'font-family-site-tagline'          => 'PT Sans',
				'font-size-site-tagline'            => 12,
				// Main Menu
				'font-family-nav'					=> 'PT Sans',
				'font-size-nav'                     => 14,
				'font-family-subnav'				=> 'PT Sans',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'PT Sans',
				'font-size-widget'                  => 13,
				// Headers & Body
				'font-family-h1'                    => 'PT Sans',
				'font-size-h1'                      => 50,
				'font-family-h2'                    => 'PT Sans',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'PT Sans',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'PT Sans',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'PT Sans',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'PT Sans',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'PT Sans',
				'font-size-body'                    => 17,

				// Old Fonts
				'font-site-title'                   => 'PT Sans',
				'font-header'                       => 'PT Sans',
				'font-body'                         => 'PT Sans',
				'font-site-title-size'              => 34,
				'font-site-tagline-size'            => 12,
				'font-nav-size'                     => 14,
				'font-header-size'                  => 50,
				'font-widget-size'                  => 13,
				'font-body-size'                    => 17,

				// Colors
				'color-primary'                     => '#0fc637',
				'color-secondary'                   => '#eaecee',
				'color-text'                        => '#171717',
				'color-detail'                      => '#b9bcbf',

				// Header
				'header-text-color'                 => '#171717',
				'header-background-color'           => '#ffffff',
				'header-background-image'           => '',
				'header-bar-background-color'       => '#ffffff',
				'header-bar-text-color'             => '#171717',
				'header-bar-border-color'           => '#b9bcbf',
				'header-layout'                     => 1,

				// Main
				'main-background-color'             => '#ffffff',
				'main-background-image'             => '',

				// Footer
				'footer-text-color'                 => '#464849',
				'footer-border-color'               => '#b9bcbf',
				'footer-background-color'           => '#ffffff',
				'footer-background-image'           => '',
				'footer-layout'                     => 1,
			)
		),
		'dark' => array(
			'label' => __( 'Dark', 'make-plus' ),
			'priority' => 20,
			'definitions' => array(
				// Site Title & Tagline
				'color-site-title'                  => '#ffffff',

				// General
				'general-layout'                    => 'full-width',

				// Background
				'background_color'                  => '#323232',
				'background_image'                  => '',

				// New Fonts
				// Site Title & Tagline
				'font-family-site-title'            => 'Lato',
				'font-size-site-title'              => 34,
				'font-family-site-tagline'          => 'Lato',
				'font-size-site-tagline'            => 12,
				// Main Menu
				'font-family-nav'					=> 'Lato',
				'font-size-nav'                     => 14,
				'font-family-subnav'				=> 'Lato',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'Lato',
				'font-size-widget'                  => 14,
				// Headers & Body
				'font-family-h1'                    => 'Lato',
				'font-size-h1'                      => 50,
				'font-family-h2'                    => 'Lato',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'Lato',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'Lato',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'Lato',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'Lato',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'Lato',
				'font-size-body'                    => 17,
				
				// Old Fonts
				'font-site-title'                   => 'Lato',
				'font-header'                       => 'Lato',
				'font-body'                         => 'Lato',
				'font-site-title-size'              => 34,
				'font-site-tagline-size'            => 12,
				'font-nav-size'                     => 14,
				'font-header-size'                  => 50,
				'font-widget-size'                  => 14,
				'font-body-size'                    => 17,

				// Colors
				'color-primary'                     => '#ea451c',
				'color-secondary'                   => '#a0a0a0',
				'color-text'                        => '#ffffff',
				'color-detail'                      => '#b9bcbf',

				// Header
				'header-text-color'                 => '#ffffff',
				'header-background-color'           => '#323232',
				'header-background-image'           => '',
				'header-bar-background-color'       => '#1e1e1e',
				'header-bar-text-color'             => '#ffffff',
				'header-bar-border-color'           => '#1e1e1e',
				'header-layout'                     => 1,

				// Main
				'main-background-color'             => '#323232',
				'main-background-image'             => '',

				// Footer
				'footer-text-color'                 => '#ffffff',
				'footer-border-color'               => '#353535',
				'footer-background-color'           => '#1e1e1e',
				'footer-background-image'           => '',
				'footer-layout'                     => 1,
			)
		),
		'modern' => array(
			'label' => __( 'Modern', 'make-plus' ),
			'priority' => 30,
			'definitions' => array(
				// Site Title & Tagline
				'color-site-title'                  => '#171717',

				// General
				'general-layout'                    => 'full-width',

				// Background
				'background_color'                  => '#b9bcbf',
				'background_image'                  => '',

				// New Fonts
				// Site Title & Tagline
				'font-family-site-title'            => 'Raleway',
				'font-size-site-title'              => 34,
				'font-family-site-tagline'          => 'Open Sans',
				'font-size-site-tagline'            => 12,
				// Main Menu
				'font-family-nav'					=> 'Open Sans',
				'font-size-nav'                     => 14,
				'font-family-subnav'				=> 'Open Sans',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'Open Sans',
				'font-size-widget'                  => 14,
				// Headers & Body
				'font-family-h1'                    => 'Raleway',
				'font-size-h1'                      => 50,
				'font-family-h2'                    => 'Raleway',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'Raleway',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'Raleway',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'Raleway',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'Raleway',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'Open Sans',
				'font-size-body'                    => 17,

				// Old Fonts
				'font-site-title'                   => 'Raleway',
				'font-header'                       => 'Raleway',
				'font-body'                         => 'Open Sans',
				'font-site-title-size'              => 34,
				'font-site-tagline-size'            => 12,
				'font-nav-size'                     => 14,
				'font-header-size'                  => 50,
				'font-widget-size'                  => 14,
				'font-body-size'                    => 17,

				// Colors
				'color-primary'                     => '#e83365',
				'color-secondary'                   => '#d4d6d7',
				'color-text'                        => '#171717',
				'color-detail'                      => '#b9bcbf',

				// Header
				'header-text-color'                 => '#171717',
				'header-background-color'           => '#ffffff',
				'header-background-image'           => '',
				'header-bar-background-color'       => '#d4d6d7',
				'header-bar-text-color'             => '#171717',
				'header-bar-border-color'           => '#b0b1b2',
				'header-layout'                     => 1,

				// Main
				'main-background-color'             => '#ffffff',
				'main-background-image'             => '',

				// Footer
				'footer-text-color'                 => '#464849',
				'footer-border-color'               => '#b0b1b2',
				'footer-background-color'           => '#d4d6d7',
				'footer-background-image'           => '',
				'footer-layout'                     => 1,
			)
		),
		'creative' => array(
			'label' => __( 'Creative', 'make-plus' ),
			'priority' => 40,
			'definitions' => array(
				// Site Title & Tagline
				'color-site-title'                  => '#fe6541',

				// General
				'general-layout'                    => 'full-width',

				// Background
				'background_color'                  => '#b9bcbf',
				'background_image'                  => '',

				// New Fonts
				// Site Title & Tagline
				'font-family-site-title'            => 'Cookie',
				'font-size-site-title'              => 34,
				'font-family-site-tagline'          => 'Open Sans',
				'font-size-site-tagline'            => 12,
				// Main Menu
				'font-family-nav'					=> 'Open Sans',
				'font-size-nav'                     => 14,
				'font-family-subnav'				=> 'Open Sans',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'Open Sans',
				'font-size-widget'                  => 14,
				// Headers & Body
				'font-family-h1'                    => 'Open Sans',
				'font-size-h1'                      => 50,
				'font-family-h2'                    => 'Open Sans',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'Open Sans',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'Open Sans',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'Open Sans',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'Open Sans',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'Open Sans',
				'font-size-body'                    => 17,
				
				// Old Fonts
				'font-site-title'                   => 'Cookie',
				'font-header'                       => 'Open Sans',
				'font-body'                         => 'Open Sans',
				'font-site-title-size'              => 34,
				'font-site-tagline-size'            => 12,
				'font-nav-size'                     => 14,
				'font-header-size'                  => 50,
				'font-widget-size'                  => 14,
				'font-body-size'                    => 17,

				// Colors
				'color-primary'                     => '#fe6541',
				'color-secondary'                   => '#bac6cd',
				'color-text'                        => '#667077',
				'color-detail'                      => '#bac6cd',

				// Header
				'header-text-color'                 => '#667077',
				'header-background-color'           => '#fafbf8',
				'header-background-image'           => '',
				'header-bar-background-color'       => '#bac6cd',
				'header-bar-text-color'             => '#171717',
				'header-bar-border-color'           => '#fafbf8',
				'header-layout'                     => 1,

				// Main
				'main-background-color'             => '#fafbf8',
				'main-background-image'             => '',

				// Footer
				'footer-text-color'                 => '#667077',
				'footer-border-color'               => '#bac6cd',
				'footer-background-color'           => '#fafbf8',
				'footer-background-image'           => '',
				'footer-layout'                     => 1,
			)
		),
		'vintage' => array(
			'label' => __( 'Vintage', 'make-plus' ),
			'priority' => 50,
			'definitions' => array(
				// Site Title & Tagline
				'color-site-title'                  => '#22231c',

				// General
				'general-layout'                    => 'boxed',

				// Background
				'background_color'                  => '#393a32',
				'background_image'                  => '',

				// New Fonts
				// Site Title & Tagline
				'font-family-site-title'            => 'Playfair Display',
				'font-size-site-title'              => 34,
				'font-family-site-tagline'          => 'IM Fell English',
				'font-size-site-tagline'            => 12,
				// Main Menu
				'font-family-nav'					=> 'IM Fell English',
				'font-size-nav'                     => 14,
				'font-family-subnav'				=> 'IM Fell English',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'IM Fell English',
				'font-size-widget'                  => 14,
				// Headers & Body
				'font-family-h1'                    => 'Playfair Display',
				'font-size-h1'                      => 50,
				'font-family-h2'                    => 'Playfair Display',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'Playfair Display',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'Playfair Display',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'Playfair Display',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'Playfair Display',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'IM Fell English',
				'font-size-body'                    => 17,

				// Old Fonts
				'font-site-title'                   => 'Playfair Display',
				'font-header'                       => 'Playfair Display',
				'font-body'                         => 'IM Fell English',
				'font-site-title-size'              => 34,
				'font-site-tagline-size'            => 12,
				'font-nav-size'                     => 14,
				'font-header-size'                  => 50,
				'font-widget-size'                  => 14,
				'font-body-size'                    => 17,

				// Colors
				'color-primary'                     => '#d0601d',
				'color-secondary'                   => '#dedabe',
				'color-text'                        => '#22231c',
				'color-detail'                      => '#dedabe',

				// Header
				'header-text-color'                 => '#22231c',
				'header-background-color'           => '#fbf9ec',
				'header-background-image'           => '',
				'header-bar-background-color'       => '#22231c',
				'header-bar-text-color'             => '#ffffff',
				'header-bar-border-color'           => '#22231c',
				'header-layout'                     => 2,

				// Main
				'main-background-color'             => '#fbf9ec',
				'main-background-image'             => '',

				// Footer
				'footer-text-color'                 => '#22231c',
				'footer-border-color'               => '#dedabe',
				'footer-background-color'           => '#fbf9ec',
				'footer-background-image'           => '',
				'footer-layout'                     => 2,
			)
		),
		'hello' => array(
			'label' => __( 'Hello', 'make-plus' ),
			'priority' => 5,
			'definitions' => array(
				/**
				 * General
				 */
				// Background Image
				'background_image'                  => '',
				'main-background-image'             => '',

				/**
				 * Typography
				 */
				// Site Title & Tagline
				'font-family-site-title'            => 'Kalam',
				'font-size-site-title'              => 70,
				'font-family-site-tagline'          => 'PT Mono',
				'font-size-site-tagline'            => 14,
				// Main Menu
				'font-family-nav'                   => 'PT Mono',
				'font-size-nav'                     => 14,
				'font-family-subnav'                => 'PT Mono',
				'font-size-subnav'                  => 13,
				// Widgets
				'font-family-widget'                => 'PT Mono',
				'font-size-widget'                  => 13,
				// Headers & Body
				'font-family-h1'                    => 'Karla',
				'font-size-h1'                      => 46,
				'font-family-h2'                    => 'Karla',
				'font-size-h2'                      => 34,
				'font-family-h3'                    => 'Karla',
				'font-size-h3'                      => 24,
				'font-family-h4'                    => 'Karla',
				'font-size-h4'                      => 24,
				'font-family-h5'                    => 'Karla',
				'font-size-h5'                      => 16,
				'font-family-h6'                    => 'Karla',
				'font-size-h6'                      => 14,
				'font-family-body'                  => 'PT Mono',
				'font-size-body'                    => 14,

				/**
				 * Color Scheme
				 */
				// General
				'color-primary'                     => '#003bff',
				'color-secondary'                   => '#eaecee',
				'color-text'                        => '#000000',
				'color-detail'                      => '#b9bcbf',
				// Background
				'background_color'                  => 'b9bcbf',
				'main-background-color'             => '#f7f7f7',
				// Header
				'header-bar-background-color'       => '#171717',
				'header-bar-text-color'             => '#ffffff',
				'header-bar-border-color'           => '#171717',
				'header-background-color'           => '#f7f7f7',
				'header-text-color'                 => '#000000',
				'color-site-title'                  => '#000000',
				// Footer
				'footer-background-color'           => '#ffffff',
				'footer-text-color'                 => '#000000',
				'footer-border-color'               => '#000000',

				/**
				 * Header
				 */
				// Background Image
				'header-background-image'           => '',
				// Layout
				'header-layout'                     => 2,
				'header-branding-position'          => 'left',
				'header-bar-content-layout'         => 'default',
				'header-text'                       => '',
				'header-show-social'                => 0,
				'header-show-search'                => 0,

				/**
				 * Content & Layout
				 */
				// Global
				'general-layout'                           => 'full-width',
				'main-content-link-underline'              => 1,
				// Blog (Posts Page)
				'layout-blog-featured-images'              => 'post-header',
				'layout-blog-post-date'                    => 'relative',
				'layout-blog-post-author'                  => 'avatar',
				'layout-blog-auto-excerpt'                 => 0,
				'layout-blog-show-categories'              => 1,
				'layout-blog-show-tags'                    => 1,
				'layout-blog-featured-images-alignment'    => 'left',
				'layout-blog-post-date-location'           => 'before-content',
				'layout-blog-post-author-location'         => 'before-content',
				'layout-blog-comment-count'                => 'icon',
				'layout-blog-comment-count-location'       => 'post-footer',
				// Archives
				'layout-archive-featured-images'           => 'post-header',
				'layout-archive-post-date'                 => 'relative',
				'layout-archive-post-author'               => 'avatar',
				'layout-archive-auto-excerpt'              => 0,
				'layout-archive-show-categories'           => 1,
				'layout-archive-show-tags'                 => 1,
				'layout-archive-featured-images-alignment' => 'left',
				'layout-archive-post-date-location'        => 'before-content',
				'layout-archive-post-author-location'      => 'before-content',
				'layout-archive-comment-count'             => 'icon',
				'layout-archive-comment-count-location'    => 'post-footer',
				// Search Results
				'layout-search-featured-images'            => 'thumbnail',
				'layout-search-post-date'                  => 'relative',
				'layout-search-post-author'                => 'none',
				'layout-search-auto-excerpt'               => 1,
				'layout-search-show-categories'            => 1,
				'layout-search-show-tags'                  => 1,
				'layout-search-post-date-location'         => 'before-content',
				'layout-search-comment-count'              => 'none',
				// Posts
				'layout-post-featured-images'              => 'post-header',
				'layout-post-post-date'                    => 'relative',
				'layout-post-post-author'                  => 'avatar',
				'layout-post-show-categories'              => 1,
				'layout-post-show-tags'                    => 1,
				'layout-post-featured-images-alignment'    => 'left',
				'layout-post-post-date-location'           => 'before-content',
				'layout-post-post-author-location'         => 'before-content',
				'layout-post-comment-count'                => 'none',
				// Pages
				'layout-page-hide-title'                   => 0,
				'layout-page-featured-images'              => 'none',
				'layout-page-post-date'                    => 'none',
				'layout-page-post-author'                  => 'none',
				'layout-page-comment-count'                => 'none',

				/**
				 * Footer
				 */
				// Background Image
				'footer-background-image'           => '',
				// Widget Areas
				'footer-widget-areas'               => 3,
				// Layout
				'footer-layout'                     => 2,
				'footer-text'                       => '',
				'footer-show-social'                => 1,
			),
		),
	);

	return apply_filters( 'ttfmp_style_kit_definitions', $definitions );
}
endif;
