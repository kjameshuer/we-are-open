<?php

/**
 * Fired during plugin deactivation
 *
 * @link       kjhuer.com
 * @since      1.0.0
 *
 * @package    We_Are_Open
 * @subpackage We_Are_Open/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    We_Are_Open
 * @subpackage We_Are_Open/includes
 * @author     Kevin Huer <kjhuer@gmail.com>
 */
class We_Are_Open_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
              unregister_widget('we_are_open_widget');
	}

}
