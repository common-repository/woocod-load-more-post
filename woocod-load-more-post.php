<?php
/*
*
* Plugin Name: Woocod load more post
* Plugin URI:  http://woocod.com/woocod-plugin
* Description: A wordpress load more posts with category filter. You can filter post via category and custom taxonomy with load more.
* Version:     1.0
* Author:      Sanjaya Dulal
* Author URI:  http://www.woocod.com
* Text Domain: wp-load-more-post
* Domain Path: /languages
* License:     GPL2
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*  
* Woocod load more post is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
*  
* Woocod load more post is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*  
* You should have received a copy of the GNU General Public License
* along with WP load more post. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
$pdir = plugin_dir_path(__FILE__);

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more-deactivator.php';

register_activation_hook(__FILE__, array('Wlmp_More_Activator', 'activate'));

register_deactivation_hook(__FILE__, array('Wlmp_More_Deactivator', 'deactivate'));

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.5
 */
function wlmp_run_wp_load_more()
{
    $plugin = new Wlmp_more();
    $plugin->run();

}

wlmp_run_wp_load_more();

//add ajaxurl on frontend
add_action('wp_head', 'wlmp_ajaxurl');
function wlmp_ajaxurl() { ?>
<script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php }

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function wlmp_plugin_script(){
    wp_enqueue_script('jquery', false, array(), false, false);
    wp_enqueue_style('loadmore-css', plugins_url('/assets/css.css', __FILE__), '', '', '');
    wp_enqueue_style('loadmore-css');
}
add_filter('wp_footer', 'wlmp_plugin_script');
