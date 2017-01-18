<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       kjhuer.com
 * @since      1.0.0
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/admin
 * @author     Kevin Huer <kjhuer@gmail.com>
 */
class We_Are_Open_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		
                
                
         if ( 'settings_page_we-are-open' == get_current_screen() -> id ) {
             // CSS stylesheet for Color Picker
             wp_enqueue_style( 'wp-color-picker' );            
            wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/we-are-open-admin.css', array('wp-color-picker'), $this->version, 'all' );
         }
                

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/we-are-open-admin.js', array( 'jquery','wp-color-picker' ), $this->version, false );

	}
        
            /**
             * Register the administration menu for this plugin into the WordPress Dashboard menu.
             *
             * @since    1.0.0
             */

            public function add_plugin_admin_menu() {

                /*
                 * Add a settings page for this plugin to the Settings menu.
                 *
                 */
                add_options_page( 'We Are Open setttings', 'We Are Open', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
                );
            }

             /**
             * Add settings action link to the plugins page.
             *
             * @since    1.0.0
             */

            public function add_action_links( $links ) {

               $settings_link = array(
                '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
               );
               return array_merge(  $settings_link, $links );

            }

            /**
             * Render the settings page for this plugin.
             *
             * @since    1.0.0
             */

            public function display_plugin_setup_page() {
                include_once( 'partials/we-are-open-admin-display.php' );
            }
            
             public function options_update() {
                register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
             }
            
            public function validate($input) {
                // All hour inputs        
                $valid = array();

                //Cleanup

                $valid['monday-open'] = (isset($input['monday-open']) && is_numeric($input['monday-open'])) ? $input['monday-open']: 0;
                $valid['monday-close'] = (isset($input['monday-close']) && is_numeric($input['monday-close'])) ? $input['monday-close']: 0;
                
                
                $valid['tuesday-open'] = (isset($input['tuesday-open']) && is_numeric($input['tuesday-open'])) ? $input['tuesday-open']: 0;
                $valid['tuesday-close'] = (isset($input['tuesday-close']) && is_numeric($input['tuesday-close'])) ? $input['tuesday-close']: 0;
                
                
                $valid['wednesday-open'] = (isset($input['wednesday-open']) && is_numeric($input['wednesday-open'])) ? $input['wednesday-open']: 0;
                $valid['wednesday-close'] = (isset($input['wednesday-close']) && is_numeric($input['wednesday-close'])) ? $input['wednesday-close']: 0;
                
                
                $valid['thursday-open'] = (isset($input['thursday-open']) && is_numeric($input['thursday-open'])) ? $input['thursday-open']: 0;
                $valid['thursday-close'] = (isset($input['thursday-close']) && is_numeric($input['thursday-close'])) ? $input['thursday-close']: 0;
                
                
                $valid['friday-open'] = (isset($input['friday-open']) && is_numeric($input['friday-open'])) ? $input['friday-open']: 0;
                $valid['friday-close'] = (isset($input['friday-close']) && is_numeric($input['friday-close'])) ? $input['friday-close']: 0;
                
                
                $valid['saturday-open'] = (isset($input['saturday-open']) && is_numeric($input['saturday-open'])) ? $input['saturday-open']: 0;
                $valid['saturday-close'] = (isset($input['saturday-close']) && is_numeric($input['saturday-close'])) ? $input['saturday-close']: 0;
                
                
                $valid['sunday-open'] = (isset($input['sunday-open']) && is_numeric($input['sunday-open'])) ? $input['sunday-open']: 0;
                $valid['sunday-close'] = (isset($input['sunday-close']) && is_numeric($input['sunday-close'])) ? $input['sunday-close']: 0;
                
                $valid['highlight-color'] = (isset($input['highlight-color'])&& !empty($input['highlight-color']) ) ? sanitize_text_field($input['highlight-color']) : '#bad';
                
                 if ( !empty($valid['highlight-color']) && !preg_match( '/^#[a-f0-9]{6}$/i', $valid['highlight-color']  ) ) { // if user insert a HEX color with #
                    add_settings_error(
                            'highlight-color',                     // Setting title
                            'highlight-color-texterror',            // Error ID
                            'Please enter a valid hex value color',     // Error message
                            'error'                         // Type of message
                    );
                }
                
                return $valid;
             }

}
