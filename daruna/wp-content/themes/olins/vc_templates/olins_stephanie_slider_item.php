<?php
$args = array(
    "slide_image" => "",
);

extract(shortcode_atts($args, $atts));

if($slide_image){ ?>
    <div>
        <?php echo wp_get_attachment_image($slide_image,'full') ?>
    </div>
<?php } ?>

