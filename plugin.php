<?php
/**
 * Plugin Name: Core Functionality
 * Plugin URI: http://www.coffeaweb.com/
 * Description: This contains all your site's core functionality so that it is theme independent.
 * Version: 1.1.0
 * Author: Brandon Kraft
 * Author URI: http://www.brandonkraft.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * The vast majority of this code is from Bill Erickson's Core Functionality plugin
 * https://github.com/billerickson/Core-Functionality
 *
 */

// Plugin Directory 
define( 'BE_DIR', dirname( __FILE__ ) );
 
// Post Types
//include_once( BE_DIR . '/lib/functions/post-types.php' );

// Taxonomies 
//include_once( BE_DIR . '/lib/functions/taxonomies.php' );

// Metaboxes
//include_once( BE_DIR . '/lib/functions/metaboxes.php' );
 
// Shortcodes
include_once( BE_DIR . '/lib/functions/shortcodes.php' );

// Facebook Open Graph Tags
// -- Set default image in general.php
include_once( BE_DIR . '/lib/functions/facebook.php' );

// Widgets
//include_once( BE_DIR . '/lib/widgets/widget-social.php' );

// General
include_once( BE_DIR . '/lib/functions/general.php' );