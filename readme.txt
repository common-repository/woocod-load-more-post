=== Woocod load more post ===
Contributors: sanjayabhai
Tags: loadmore, ajax loadmore, post loadmore, category filter with load more, wordpress loadmore
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WordPress All in One Load more post for all type of post type and custom post type with custom taxonomy and category.

== Description ==

= How to use? =
It have it's own shotcode. You can use the shortcode in any page, content, post, whereever you want. 

= For page, post, custom post type: = 
= [wlmp_loadmore_nav taxonomy="category"] =

* Loads category list . use taxonomy = "taxonomy used in post type" by default it's "category"

= [wlmp_loadmore_template post_type="piper"] =

* Loads template container and ajax scripts

= [wlmp_loadmore_button] =

* show load more button is post page is more that one.

= And for PHP template : = 
&lt;?php echo do_shortcode('[wlmp_loadmore_nav taxonomy="category"]'); ?&gt;

&lt;?php echo do_shortcode('[wlmp_loadmore_template post_type="piper"]'); ?&gt;

&lt;?php echo do_shortcode('[wlmp_loadmore_button]'); ?&gt;

Load more will show when you post is more than 10. 

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/woocod-load-more-post` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Follow the steps from description tab


== Frequently Asked Questions ==

= Can i use it for custom post type ? =

Yes you can use it for custom post type too. Just replace the "piper" from shortcode [wplmp_loadmore_template post_type="woocod-post-type"] with your custom post type.

= Can i use custom taxonomy filter =

Yes you can use it for custom category filter. Just replace the "category" to custom taxonomy slug [wlmp_loadmore_nav taxonomy="category-or-custom-taxonomy-releated-post"].

= About load more button = 

If the post is more then 10 then it will automatically show load more button.

= Want load more button, category nav to hide =

Just remove shortcode from editor or php file where you past or do_shortcode. It will remove.


== Changelog ==

= 1.0 =
First version of plugin.