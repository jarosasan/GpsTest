<?php wp_enqueue_script( 'slick' ); ?>
<?php
$args = array(
    "slider_info" => "",
    "slider_pre_title" => "",
    "slider_title" => "",
);

preg_match_all( '/olins_works_slider_item([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$slides= array();
$total_photos_in_slider = 0;

if ( isset( $matches[1] ) ) {
    $slides = $matches[1];
}
$total_photos_in_slider = count($slides);

extract(shortcode_atts($args, $atts));
?>
<div class="olins_works_slider_container">
    <div class="olins_works_slider">
        <?php echo do_shortcode($content); ?>
    </div>
    <div class="works_slider_data_container cf">
        <div class="content_wrapper white_block">
            <div class="data-info">
                <?php if($slider_info) {echo esc_attr($slider_info); } ?>
            </div>
            <div class="title-and-cat">
                <h3><?php if($slider_title){echo esc_attr($slider_title); } ?></h3>
                <span class="category">
                    <?php if($slider_pre_title){echo esc_attr($slider_pre_title); } ?>
                </span>
            </div>
            <div class="photos-count">
                <div class="photos_numbers">
                    <span class="previous_works_slide"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    <div class="nums">
                        <span class="current_photo">1</span>
                        <span class="of"><?php echo esc_html_e('of','olins'); ?></span>
                        <span class="total_photos"><?php echo esc_attr($total_photos_in_slider); ?></span>
                    </div>
                    <span class="next_works_slide"><i class="fa fa-angle-right" aria-hidden="true"></i></span>

                </div>
            </div>
        </div>
    </div>
</div>