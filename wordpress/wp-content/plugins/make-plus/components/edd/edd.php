<?php

if ( ! class_exists( 'TTFMP_EDD' ) ) :
/**
 * Bootstrap the enhanced WooCommerce functionality.
 *
 * @since 1.1.0.
 */
class TTFMP_EDD {
	/**
	 * Name of the component.
	 *
	 * @since 1.1.0.
	 *
	 * @var   string    The name of the component.
	 */
	var $component_slug = 'edd';

	/**
	 * Path to the component directory (e.g., /var/www/mysite/wp-content/plugins/make-plus/components/my-component).
	 *
	 * @since 1.1.0.
	 *
	 * @var   string    Path to the component directory
	 */
	var $component_root = '';

	/**
	 * File path to the plugin main file (e.g., /var/www/mysite/wp-content/plugins/make-plus/components/my-component/my-component.php).
	 *
	 * @since 1.1.0.
	 *
	 * @var   string    Path to the plugin's main file.
	 */
	var $file_path = '';

	/**
	 * The URI base for the plugin (e.g., http://domain.com/wp-content/plugins/make-plus/my-component).
	 *
	 * @since 1.1.0.
	 *
	 * @var   string    The URI base for the plugin.
	 */
	var $url_base = '';

	/**
	 * The one instance of TTFMP_EDD.
	 *
	 * @since 1.1.0.
	 *
	 * @var   TTFMP_EDD
	 */
	private static $instance;

	/**
	 * Instantiate or return the one TTFMP_EDD instance.
	 *
	 * @since  1.1.0.
	 *
	 * @return TTFMP_EDD
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Bootstrap the module
	 *
	 * @since  1.1.0.
	 *
	 * @return TTFMP_EDD
	 */
	public function __construct() {
		// Set the main paths for the component
		$this->component_root = ttfmp_get_app()->component_base . '/' . $this->component_slug;
		$this->file_path      = $this->component_root . '/' . basename( __FILE__ );
		$this->url_base       = untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * Initialize the components of the module
	 *
	 * @since  1.1.0.
	 *
	 * @return void
	 */
	public function init() {
		// Include needed files
		require_once $this->component_root . '/class-section-definitions.php';
		require_once $this->component_root . '/color.php';

		// Enqueue scripts and styles
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// Add template path
		add_filter( 'edd_template_paths', array( $this, 'filter_template_paths' ) );

		// Filter the shortcode output
		add_filter( 'downloads_shortcode', array( $this, 'filter_downloads_shortcode' ), 10, 4 );
	}

	/**
	 * Enqueue styles and scripts
	 *
	 * @since  1.1.0.
	 *
	 * @return void
	 */
	public function enqueue_scripts() {
		// Styles
		wp_enqueue_style(
			'ttfmp-edd',
			trailingslashit( $this->url_base ) . 'css/edd.css',
			array( 'edd-styles' ),
			ttfmp_get_app()->version
		);
	}

	/**
	 * Add the plugin module path as the first path to search for EDD template files.
	 *
	 * @since 1.1.0.
	 *
	 * @param  array    $file_paths    The original array of file paths.
	 * @return array                   The modified array of file paths.
	 */
	public function filter_template_paths( $file_paths ) {
		$new_path = array( trailingslashit( $this->component_root ) . 'templates' );
		return array_merge( $new_path, $file_paths );
	}

	/**
	 * Filter the downloads shortcode.
	 *
	 * @since 1.1.0.
	 *
	 * @param  string    $display       The output of the shortcode.
	 * @param  array     $atts          Unused.
	 * @param  string    $buy_button    Unused.
	 * @param  int       $columns       The number of columns for the downloads grid.
	 * @return string                   The modified output of the shortcode.
	 */
	public function filter_downloads_shortcode( $display, $atts, $buy_button, $columns ) {
		$columns = absint( $columns );

		if ( 1 === $columns ) {
			return $display;
		}

		ob_start(); ?>
		<script type="application/javascript">
			(function($) {
				$('.edd_download_columns_<?php echo $columns; ?> .edd_download').filter(function(index) {
					return (index%<?php echo $columns; ?> == <?php echo $columns - 1; ?>);
				}).addClass('last');
			})(jQuery);
		</script>
	<?php
		$script = trim( ob_get_clean() );

		return $display . $script;
	}
}
endif;

if ( ! function_exists( 'ttfmp_get_edd' ) ) :
/**
 * Instantiate or return the one TTFMP_EDD instance.
 *
 * @since  1.1.0.
 *
 * @return TTFMP_EDD
 */
function ttfmp_get_edd() {
	return TTFMP_EDD::instance();
}
endif;

ttfmp_get_edd()->init();
