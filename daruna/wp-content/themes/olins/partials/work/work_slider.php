<?php $images = get_post_meta($post->ID, 'ale_gallery_id', true);
if ( $images ){ ?>
	<div class="single_post_images_slider">
		<ul class="slides">
			<?php foreach ( $images as $attachment ) { ?>
				<li>
					<?php echo wp_get_attachment_image( $attachment, 'full' ); ?>
				</li>
			<?php } ?>
		</ul>
	</div>
<?php } ?>