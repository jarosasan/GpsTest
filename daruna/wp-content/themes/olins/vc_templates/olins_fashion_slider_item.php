<?php
$args = array(
    "slide_image" => "",
    "slide_title" => "",
    "slide_subtitle" => "",
    "slide_desc" => "",
);

extract(shortcode_atts($args, $atts));

if($slide_image){ ?>
    <div class="item cf">
        <div class="left_image_holder">
            <?php if(!empty($slide_image)){
                echo '<img src="'.esc_url(wp_get_attachment_url($slide_image)).'" alt="" />';
            } ?>
        </div>
        <div class="right_data_holder olins_do_fadein">
            <?php if(!empty($slide_subtitle)){ ?>
                <div class="slide_subtitle font_two">
                    <?php echo esc_attr($slide_subtitle); ?>
                </div>
            <?php } ?>
            <?php if(!empty($slide_title)){ ?>
                <div class="slide_title font_two">
                    <?php echo esc_attr($slide_title); ?>
                </div>
            <?php } ?>
            <?php if(!empty($slide_desc)){ ?>
                <div class="slide_desc">
                    <?php echo esc_attr($slide_desc); ?>
                </div>
            <?php } ?>
        </div>
    </div>

<?php } ?>