<?php
$args = array(
    "date" => "",
    "title" => "",
    "text" => ""
);

extract(shortcode_atts($args, $atts));
?>

<div class="olins_timeline_item">
    <?php if($date){
        echo '<div class="date_field">'.esc_attr($date).'</div>';
    } ?>
    <?php if($title){
        echo '<div class="title_field">'.esc_attr($title).'</div>';
    } ?>
    <?php if($text){
        echo '<div class="text_field">'.esc_attr($text).'</div>';
    } ?>
</div>
