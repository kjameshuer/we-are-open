<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       kjhuer.com
 * @since      1.0.0
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/public
 * @author     Kevin Huer <kjhuer@gmail.com>
 */
class We_Are_Open_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in We_Are_Open_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The We_Are_Open_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/we-are-open-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in We_Are_Open_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The We_Are_Open_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
            
            $options = get_option($this->plugin_name);
            $color = $options['highlight-color'];
            $weAreOpenOptions = array(
                'highlightColor'=>$color
            );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/we-are-open-public.js', array( 'jquery' ), $this->version, false );
                wp_localize_script('we-are-open','weAreOpenOptions',$weAreOpenOptions);

	}
        
        public function add_widget(){
            
                register_widget('we_are_open_widget');
            
        }

}
