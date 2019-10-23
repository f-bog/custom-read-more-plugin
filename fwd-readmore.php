<?php
/*
Plugin Name:  FWD Read More
Description:  Change the excerpt and add fun animations.
Version:      1.0.0
Author:       Pixelize Web Design
Author URI:   https://pixelize.com.au/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  fwdreadmore
Domain Path:  /languages
 */

if (!defined('ABSPATH')) exit;
define('FWDREADMOREPLUGIN_URL', plugin_dir_url(__FILE__));
define('FWDREADMOREPLUGIN_DIR', plugin_dir_path(__FILE__));

include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-settings.php');
include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-menus.php');
include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-styles.php');
include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-scripts.php');
include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-changer.php');
include(plugin_dir_path(__FILE__) . 'includes/fwd-readmore-options.php');
