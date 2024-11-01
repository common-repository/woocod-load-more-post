<div class="col-md-4 col-sm-6">
	<div class="post-box equalize-col">
		<div class="post-box-content">
		<div class="image-col">
			<?php $wplmp_image_url_load_more = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			if ($image_url_load_more) {
			    $wplmp_image_post_display = $wplmp_image_url_load_more[0];
			} else {
			    $wplmp_image_post_display = plugins_url('assets/default.jpg', dirname(__FILE__));
			}
			?>
		<img src="<?php echo $wplmp_image_post_display; ?>" width="100%">
		</div>
			<h3 class="post-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
			<div class="post-content"><?php echo wp_trim_words(_e(get_the_content()), 12, "..."); ?></div>
			<div class="entry-date"><?php the_date('F j Y');?></div>
			<div class="readmore-container">
			<a href="<?php the_permalink();?>"><?php _e('Read more');?></a>
			</div>
		</div>
	</div>
</div>

