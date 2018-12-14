<?php
$args = array(
    'image'   => '',
    'name'      => '',
    'post'      => '',
    'desc'      => '',
    'tw'      => '',
    'fb'      => '',
    'gl'      => '',
    'pin'      => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$image_src = '';


if (is_numeric($image)) {
    $image_src = wp_get_attachment_url($image);
} ?>


<div class="olins_corporate_team">
    <?php if($image_src){ ?>
        <div class="image_box">
            <img src="<?php echo esc_url($image_src); ?>" alt="" title="" />
        </div>
    <?php } ?>
    <?php if($name){
        echo '<div class="name">'.esc_attr($name).'</div>';
    } ?>
    <?php if($post){
        echo '<div class="post">'.esc_attr($post).'</div>';
    } ?>
    <?php if($desc){
        echo '<div class="description">'.esc_attr($desc).'</div>';
    } ?>
    <div class="social_link">
        <?php if($tw){
            echo '<a class="tw social_icon" href="'.esc_url($tw).'"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
        } ?>
        <?php if($fb){
            echo '<a class="fb social_icon" href="'.esc_url($fb).'"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
        } ?>
        <?php if($gl){
            echo '<a class="gl social_icon" href="'.esc_url($gl).'"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
        } ?>
        <?php if($pin){
            echo '<a class="pin social_icon" href="'.esc_url($pin).'"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>';
        } ?>
    </div>

</div>
